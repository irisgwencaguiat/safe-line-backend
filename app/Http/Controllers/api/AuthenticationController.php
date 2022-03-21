<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUser;
use App\Http\Requests\User\Login;
use App\Models\Location;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;

class AuthenticationController extends Controller
{

    use SendsPasswordResetEmails;

    public function signup(CreateUser $request)
    {
        $path = $request->file("image")
            ? Cloudinary::upload($request->file("image")->getRealPath(), [
                "folder" => "safe-line/profile",
            ])->getSecurePath()
            : null;

        $user = User::create([
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
            "user_type" => "patient",
        ]);

        $contacts = explode(",", $request->input("contacts"));
        if (!$request->input("contacts")) {
            $contacts = [];
        }
        $newProfile = [
            "first_name" => $request->input("first_name"),
            "last_name" => $request->input("last_name"),
            "gender" => $request->input("gender"),
            "birthday" => $request->input("birthday"),
            "image_url" => $path,
            "user_id" => $user->id,
        ];
        if ($path === null) {
            unset($newProfile["image_url"]);
        }
        $profile = Profile::create($newProfile);

        Location::create([
            "address" => $request->input("address"),
            "latitude" => $request->input("latitude"),
            "longitude" => $request->input("longitude"),
            "profile_id" => $profile->id,
        ]);

        foreach ($contacts as $contact) {
            $newContact = explode(":", $contact);
            Contact::create([
                "name" => $newContact[0],
                "contact" => $newContact[1],
                "profile_id" => $profile->id,
            ]);
        }

        $credentials = [
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ];

        if (!Auth::attempt($credentials)) {
            return customResponse()
                ->data([])
                ->message("Failed to sign up.")
                ->unathorized()
                ->generate();
        }

        $accessToken = Auth::user()->createToken("authToken")->accessToken;
        return customResponse()
            ->data([
                "user" => User::where("id", $user->id)->with(["clinicMember"])
                    ->get()
                    ->first(),
                "access_token" => $accessToken,
            ])
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }

    public function login(Login $request)
    {
        $credentials = [
            "email" => $request->input("email"),
            "password" => $request->input("password"),
        ];

        if (!Auth::attempt($credentials)) {
            return customResponse()
                ->data([])
                ->message("Invalid credentials.")
                ->unathorized()
                ->generate();
        }
        $accessToken = Auth::user()->createToken("authToken")->accessToken;
        $user = User::where("id", Auth::id())->with(["clinicMember"])
            ->get()
            ->first();

        if ($user->user_type == "clinic_member") {
            return customResponse()
                ->data([
                    "user" => $user,
                    "clinic" => $user
                        ->clinicMember()
                        ->get()
                        ->first()
                        ->clinic()
                        ->get()
                        ->first(),
                    "access_token" => $accessToken,
                ])
                ->message("You have successfully logged in.")
                ->success()
                ->generate();
        }
        return customResponse()
            ->data([
                "user" => User::where("id", Auth::id())
                    ->get()
                    ->first(),
                "access_token" => $accessToken,
            ])
            ->message("You have successfully logged in.")
            ->success()
            ->generate();
    }

    public function sendPasswordResetLink(Request $request) {
        if (empty($request->input("email"))) {
            return customResponse()
                ->data([])
                ->message("E-mail is required")
                ->unathorized()
                ->generate();
        }

        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        if ($response == Password::RESET_LINK_SENT) {
            return customResponse()
                ->data($response)
                ->message("Password reset link set to your email!")
                ->success()
                ->generate();
        } else {
            return customResponse()
                ->data([])
                ->message("E-mail not found.")
                ->unathorized()
                ->generate();
        }
    }


    public function callResetPassword(Request $request) {
        return $this->reset($request);
    }

    protected function resetPassword($user, $password) {
        $user->password = Hash::make($password);
        $user->save();

        event(new PasswordReset($user));
    }

    protected function sendResetResponse(Request $request, $response) {
        return customResponse()
            ->data($response)
            ->message("Password reset successfully.")
            ->success()
            ->generate();
    }

    protected function sendResetFailedResponse(Request $request, $response) {
        return customResponse()
            ->data([])
            ->message("Failed, Invalid Token.")
            ->unathorized()
            ->generate();
    }

}
