<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clinic\CreateClinic;
use App\Http\Requests\Clinic\CreateClinicMember;
use App\Http\Requests\Clinic\CreateClinicService;
use App\Http\Requests\Clinic\UpdateClinicStatus;
use App\Http\Requests\Clinic\UploadClinicFiles;
use App\Models\ClinicFile;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Clinic;
use App\Models\ClinicMember;
use App\Models\ClinicService;
use App\Models\Profile;
use App\Models\Room;
use App\Models\RoomMember;
use App\Models\Service;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ClinicController extends Controller
{
    public function signup(CreateClinic $request)
    {
        $clinic = Clinic::create([
            "name" => $request->input("name"),
            "slug" => Str::slug($request->input("name"), "_"),
            "opening_time" => $request->input("opening_time"),
            "closing_time" => $request->input("closing_time"),
            "user_id" => Auth::id(),
        ]);

        User::where("id", Auth::id())->update([
            "has_clinic" => true,
        ]);

        Location::create([
            "address" => $request->input("address"),
            "latitude" => $request->input("latitude"),
            "longitude" => $request->input("longitude"),
            "clinic_id" => $clinic->id,
        ]);

        foreach ($request->input("services") as $service) {
            ClinicService::create([
                "clinic_id" => $clinic->id,
                "service_id" => $service,
            ]);
        }

        return customResponse()
            ->data(
                Clinic::where("id", $clinic->id)
                    ->get()
                    ->first()
            )
            ->message("Clinic has been successfully created.")
            ->success()
            ->generate();
    }

    public function getClinics(Request $request)
    {
        $clinics = new Clinic();

        if ($request->has("search")) {
            $search = "%" . $request->get("search") . "%";

            $clinics = $clinics
                ->where("slug", "LIKE", $search)
                ->orWhereHas("location", function ($query) use ($search) {
                    $query->where("address", "LIKE", $search);
                })
                ->orWhereHas("clinicServices", function ($query) use ($search) {
                    $query->whereHas("service", function ($query) use (
                        $search
                    ) {
                        $query->where("slug", "LIKE", $search);
                    });
                });
        }

        $clinics = $clinics
            ->orderBy("created_at", "DESC")
            ->paginate(
                (int) $request->get("per_page", 10),
                ["*"],
                "page",
                (int) $request->get("page", 1)
            );

        return customResponse()
            ->data($clinics)
            ->message("Getting clinics is successful.")
            ->success()
            ->generate();
    }

    public function getClinic($id)
    {
        $clinic = Clinic::where("id", (int) $id)
            ->get()
            ->first();

        return customResponse()
            ->data($clinic)
            ->message("Getting clinic is successful.")
            ->success()
            ->generate();
    }

    public function updateClinicStatus(UpdateClinicStatus $request)
    {
        $clinic = Clinic::where("id", $request->input("clinic_id"))
            ->get()
            ->first();
        if ($request->input("status") == "approved") {
            $clinicMember = ClinicMember::create([
                "member_type" => "admin",
                "clinic_id" => $request->input("clinic_id"),
                "user_id" => $clinic->user_id,
            ]);

            User::where("id", $clinic->user_id)->update([
                "user_type" => "clinic_member",
            ]);

            $room = Room::create([
                "name" => $clinic->name,
                "room_type" => "group",
                "clinic_id" => $clinic->id,
            ]);

            RoomMember::create([
                "room_id" => $room->id,
                "user_id" => $clinicMember->user_id,
            ]);
        }
        Clinic::where("id", $request->input("clinic_id"))->update([
            "status" => $request->input("status"),
        ]);
        return customResponse()
            ->data(
                Clinic::where("id", $request->input("clinic_id"))
                    ->get()
                    ->first()
            )
            ->message("Clinic status has been updated.")
            ->success()
            ->generate();
    }

    public function updatePatientWalkIn(Request $request)
    {
        Clinic::where("id", $request->input("clinic_id"))->update([
            "accept_walk_in" => $request->input("accept_walk_in"),
        ]);

        return customResponse()
            ->data(
                Clinic::where("id", $request->input("clinic_id"))
                    ->get()
                    ->first()
            )
            ->message("Clinic Patient Walk In Status has been updated.")
            ->success()
            ->generate();
    }
    public function updateCovidPatient(Request $request)
    {
        Clinic::where("id", $request->input("clinic_id"))->update([
            "accept_covid_patient" => $request->input("accept_covid_patient"),
        ]);

        return customResponse()
            ->data(
                Clinic::where("id", $request->input("clinic_id"))
                    ->get()
                    ->first()
            )
            ->message("Clinic Accept Covid Patient Status has been updated.")
            ->success()
            ->generate();
    }

    public function uploadClinicFiles(UploadClinicFiles $request)
    {
        $clinicId = $request->input("clinic_id");
        $files = $request->file("files");
        foreach ($files as $file) {
            $path = Cloudinary::uploadFile($file->getRealPath(), [
                "folder" => "safe-line/clinic/file",
            ])->getSecurePath();

            ClinicFile::create([
                "clinic_id" => $clinicId,
                "file_url" => $path,
            ]);
        }

        $clinic = Clinic::where("id", $clinicId)
            ->get()
            ->first();

        return customResponse()
            ->data($clinic)
            ->message("Clinic files uploaded successfully.")
            ->success()
            ->generate();
    }

    public function createClinicMember(CreateClinicMember $request)
    {
        $clinic = Clinic::where("id", $request->input("clinic_id"))
            ->get()
            ->first();

        if ($clinic->status == "pending" || $clinic->status == "rejected") {
            return customResponse()
                ->data([])
                ->message("Invalid credentials.")
                ->unathorized()
                ->generate();
        }

        $path = $request->file("image")
            ? Cloudinary::upload($request->file("image")->getRealPath(), [
                "folder" => "safe-line/profile",
            ])->getSecurePath()
            : null;

        $user = User::create([
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
            "user_type" => "clinic_member",
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

        ClinicMember::create([
            "member_type" => $request->input("member_type"),
            "clinic_id" => $request->input("clinic_id"),
            "user_id" => $user->id,
        ]);

        RoomMember::create([
            "room_id" => $clinic
                ->room()
                ->pluck("id")
                ->first(),
            "user_id" => $user->id,
        ]);
        return customResponse()
            ->data(
                User::where("id", $user->id)
                    ->get()
                    ->first()
            )
            ->message("Clinic member is successfully created.")
            ->success()
            ->generate();
    }

    public function createClinicService(CreateClinicService $request)
    {
        $service = Service::create([
            "name" => $request->input("name"),
            "slug" => Str::slug($request->input("name"), "_"),
        ]);

        return customResponse()
            ->data($service)
            ->message("Service is successfully created.")
            ->success()
            ->generate();
    }

    public function getClinicService($id)
    {
        $service = Service::where("id", $id)
            ->get()
            ->first();

        return customResponse()
            ->data($service)
            ->message("Getting clinic is successful.")
            ->success()
            ->generate();
    }

    public function getClinicServices(Request $request)
    {
        $services = new Service();

        if ($request->has("search")) {
            $search = "%" . $request->get("search") . "%";

            $services = $services
                ->where("slug", "LIKE", $search)

                ->orderBy("created_at", "desc");
        }

        $services = $services->paginate(
            (int) $request->get("per_page", 10),
            ["*"],
            "page",
            (int) $request->get("page", 1)
        );

        return customResponse()
            ->data($services)
            ->message("Getting services is successful.")
            ->success()
            ->generate();
    }

    public function getNearestClinic(Request $request, $serviceId)
    {
        $foundClinics = Clinic::whereHas("clinicServices", function (
            $query
        ) use ($serviceId) {
            $query
                ->where("service_id", $serviceId)
                ->where("status", "approved");
        })->get();

        $clinicsDistance = [];
        foreach ($foundClinics as $clinic) {
            $distance =
                $clinic->location->latitude -
                (float) $request->get("latitude") +
                ($clinic->location->longitude -
                    (float) $request->get("longitude"));
            array_push($clinicsDistance, [
                "clinic" => $clinic,
                "distance" => $distance,
            ]);
        }

        usort($clinicsDistance, function ($a, $b) {
            if ($a["distance"] == $b["distance"]) {
                return 0;
            }
            return $a["distance"] > $b["distance"] ? -1 : 1;
        });
        unset($clinicsDistance["distance"]);

        foreach ($clinicsDistance as $key => $value) {
            unset($clinicsDistance[$key]["distance"]);
            $clinicsDistance[$key] = $value["clinic"];
        }
        return customResponse()
            ->data($clinicsDistance)
            ->message("Getting the nearest clinic is successful.")
            ->success()
            ->generate();
    }
}
