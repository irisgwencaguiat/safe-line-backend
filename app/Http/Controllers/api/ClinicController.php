<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clinic\CreateClinic;
use App\Http\Requests\Clinic\UpdateClinicStatus;
use App\Http\Requests\Clinic\UploadClinicFiles;
use App\Models\ClinicFile;
use App\Models\Location;
use App\Models\Clinic;
use App\Models\ClinicMember;
use App\Models\ClinicService;
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
        ]);

        User::where("id", Auth::id())->update(["has_clinic" => true]);

        Location::create([
            "address" => $request->input("address"),
            "latitude" => $request->input("latitude"),
            "longitude" => $request->input("longitude"),
            "clinic_id" => $clinic->id,
        ]);
        ClinicMember::create([
            "member_type" => "admin",
            "clinic_id" => $clinic->id,
            "user_id" => Auth::id(),
        ]);

        foreach ($request->input("services") as $service) {
            ClinicService::create([
                "clinic_id" => $clinic->id,
                "service_id" => $service,
            ]);
        }

        return customResponse()
            ->data(Clinic::find($clinic->id)->get())
            ->message("You have successfully signed up.")
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

        $clinics = $clinics->paginate(
            $request->get("per_page", 10),
            ["*"],
            "page",
            $request->get("page", 1)
        );

        return customResponse()
            ->data($clinics)
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }

    public function getClinic($id)
    {
        $clinic = Clinic::find((int) $id);

        return customResponse()
            ->data($clinic)
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }

    public function updateClinicStatus(UpdateClinicStatus $request)
    {
        Clinic::where("id", $request->input("clinic_id"))->update([
            "status" => $request->input("status"),
        ]);

        $clinic = Clinic::find($request->input("clinic_id"));

        return customResponse()
            ->data($clinic)
            ->message("You have successfully signed up.")
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

        $clinic = Clinic::find($clinicId);

        return customResponse()
            ->data($clinic)
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }
}
