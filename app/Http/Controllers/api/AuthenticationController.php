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
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
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
            "user_type" => $request->input("user_type"),
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
                "user" => User::find($user->id)->get(),
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
                ->message("Failed to log in.")
                ->unathorized()
                ->generate();
        }
        $accessToken = Auth::user()->createToken("authToken")->accessToken;

        return customResponse()
            ->data([
                "user" => User::find(Auth::id())->get(),
                "access_token" => $accessToken,
            ])
            ->message("You have successfully logged in.")
            ->success()
            ->generate();
    }
}
