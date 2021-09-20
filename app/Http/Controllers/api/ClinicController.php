<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Clinic\CreateClinic;
use App\Http\Requests\Clinic\UpdateClinicStatus;
use App\Models\Location;
use App\Models\Clinic;
use App\Models\ClinicMember;
use App\Models\ClinicService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinicController extends Controller
{
    public function getClinicRelationships($clinic)
    {
        $clinic->location = $clinic->location()->get()[0];
        $members = [];
        $clinicMembers = $clinic->clinicMembers()->get();
        foreach ($clinicMembers as $clinicMember) {
            $member = $clinicMember;
            $member->user = $member->user()->get()[0];
            array_push($members, $member);
        }
        $clinic->members = [];
        $clinic->members = array_merge($clinic->members, $members);
        $services = [];
        $clinicServices = $clinic->clinicServices()->get();
        foreach ($clinicServices as $clinicService) {
            $service = $clinicService;
            $service->service = $service->service()->get()[0];
            array_push($services, $service);
        }
        $clinic->services = [];
        $clinic->services = array_merge($clinic->services, $services);
        return $clinic;
    }

    public function signup(CreateClinic $request)
    {
        $clinic = Clinic::create([
            "name" => $request->input("name"),
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
            ->data($this->getClinicRelationships($clinic))
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }

    public function getClinics()
    {
        $clinics = Clinic::all();
        $newClinic = [];

        foreach ($clinics as $clinic) {
            array_push($newClinic, $this->getClinicRelationships($clinic));
        }

        return customResponse()
            ->data($newClinic)
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }

    public function getClinic($id)
    {
        $clinic = Clinic::find((int) $id);

        return customResponse()
            ->data($this->getClinicRelationships($clinic))
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }

    public function updateClinicStatus(UpdateClinicStatus $request)
    {
        Clinic::where("id", $request->input("id"))->update([
            "status" => $request->input("status"),
        ]);

        $clinic = Clinic::find($request->input("id"));

        return customResponse()
            ->data($this->getClinicRelationships($clinic))
            ->message("You have successfully signed up.")
            ->success()
            ->generate();
    }
}
