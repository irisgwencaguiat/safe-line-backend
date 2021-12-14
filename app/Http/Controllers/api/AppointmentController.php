<?php

namespace App\Http\Controllers\api;

use App\Events\CreateChat;
use App\Events\ExistingRoom;
use App\Events\NewRoom;
use App\Http\Controllers\Controller;
use App\Http\Requests\Appointment\RequestAppointment;
use App\Mail\AppointmentReminderMail;
use App\Models\Appointment;
use App\Models\AppointmentMember;
use App\Models\Chat;
use App\Models\Clinic;
use App\Models\ClinicMember;
use App\Models\Room;
use App\Models\RoomMember;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;

class AppointmentController extends Controller
{
    public function requestAppointment(RequestAppointment $request)
    {
        $doesRoomExist = Room::whereHas("roomMembers", function ($query) use (
            $request
        ) {
            $query
                ->where("user_id", Auth::id())
                ->where("clinic_id", $request->input("clinic_id"));
        })->get();

        $room =
            count($doesRoomExist) > 0
                ? $doesRoomExist[0]
                : Room::create([
                    "room_type" => "direct",
                    "user_id" => Auth::id(),
                    "clinic_id" => $request->input("clinic_id"),
                    "recommended_specialist" => $request->input(
                        "recommended_specialist"
                    ),
                    "recommended_channel" => $request->input(
                        "recommended_channel"
                    ),
                ]);

        if (count($doesRoomExist) < 1) {
            Chat::create([
                "message" => $request->input("message"),
                "user_id" => Auth::id(),
                "room_id" => $room->id,
                "sender_type" => "patient",
            ]);

            RoomMember::create([
                "room_id" => $room->id,
                "user_id" => Auth::id(),
            ]);
            $clinicMembers = ClinicMember::where(function ($query) use (
                $request
            ) {
                $query
                    ->where("clinic_id", $request->input("clinic_id"))
                    ->where("member_type", "csr");
            })->get();
            $userIds = [];
            foreach ($clinicMembers as $clinicMember) {
                $roomMember = RoomMember::create([
                    "room_id" => $room->id,
                    "user_id" => $clinicMember->user_id,
                ]);

                $userIds[] = "user-{$roomMember->user_id}";
            }

            event(
                new NewRoom(
                    $userIds,
                    Room::with(["lastChat"])
                        ->where("id", $room->id)
                        ->get()
                        ->first()
                )
            );
        } else {
            Chat::create([
                "message" => $request->input("message"),
                "user_id" => Auth::id(),
                "room_id" => $room->id,
                "sender_type" => "patient",
            ]);

            $roomMembers = RoomMember::where("room_id", $room->id)
                ->whereNotIn("user_id", [Auth::id()])
                ->get();
            $userIds = [];
            foreach ($roomMembers as $roomMember) {
                $userIds[] = "user-{$roomMember->user_id}";
            }
            $room->touch();
            event(
                new ExistingRoom(
                    $userIds,
                    Room::with(["lastChat"])
                        ->where("id", $room->id)
                        ->get()
                        ->first()
                )
            );
        }

        return customResponse()
            ->data(
                Room::with(["lastChat"])
                    ->where("id", $room->id)
                    ->get()
                    ->first()
            )
            ->message("Request appointment successful.")
            ->success()
            ->generate();
    }

    public function createAppointment(Request $request)
    {
        // "2021-12-02T11:51:00Z"
        $appointmentTime = explode("T", $request->input("start_time"));

        if ($request->input("appointment_type") === "personal_visit") {
            $appointment = Appointment::create([
                "type" => "personal_visit",
                "appointment_time" => rtrim($appointmentTime[1], "Z"),
                "appointment_date" => $request->input("start_time"),
                "clinic_id" => $request->input("clinic_id"),
            ]);

            AppointmentMember::create([
                "type" => "doctor",
                "appointment_id" => $appointment->id,
                "user_id" => $request->input("doctor_id"),
            ]);
            AppointmentMember::create([
                "type" => "patient",
                "appointment_id" => $appointment->id,
                "user_id" => $request->input("patient_id"),
            ]);

            return customResponse()
                ->data(
                    Appointment::where("id", $appointment->id)
                        ->get()
                        ->first()
                )
                ->message("Request appointment successful.")
                ->success()
                ->generate();
        } else {
            $requestBody = [
                "type" => 2,
                "start_time" => $request->input("start_time"),
                "timezone" => "Asia/Singapore",
                "settings" => [
                    "join_before_host" => true,
                    "approval_type" => 0,
                    "jbh_time" => 0,
                ],
            ];

            $responseData = Http::withHeaders([
                "Authorization" => "Bearer " . env("ZOOM_APP_TOKEN"),
                "Content-Type" => "application/json",
                "alg" => "HS256",
                "typ" => "JWT",
            ])
                ->post(
                    "https://api.zoom.us/v2/users/BsVmKFNrQ8KqxNftn5K0dA/meetings",
                    $requestBody
                )
                ->json();

            $appointment = Appointment::create([
                "type" => "video_teleconsultation",
                "zoom_link" => $responseData["start_url"],
                "appointment_time" => rtrim($appointmentTime[1], "Z"),
                "appointment_date" => $request->input("start_time"),
                "clinic_id" => $request->input("clinic_id"),
            ]);

            $patient = User::find($request->input("patient_id"));

            AppointmentMember::create([
                "type" => "doctor",
                "appointment_id" => $appointment->id,
                "user_id" => $request->input("doctor_id"),
            ]);
            AppointmentMember::create([
                "type" => "patient",
                "appointment_id" => $appointment->id,
                "user_id" => $request->input("patient_id"),
            ]);
            //
            //            $when = Carbon::create($request->input("start_time"))
            //                ->subHours(8)
            //                //                ->subMinutes(10)
            //                ->setTimezone("UTC");
            //
            //            Mail::to("gwencaguiat@gmail.com")->later(
            //                $when,
            //                new AppointmentReminderMail([
            //                    "time" => rtrim($appointmentTime[1]),
            //                    "link" => $responseData["start_url"],
            //                ])
            //            );

            return customResponse()
                ->data(
                    Appointment::with(["appointmentMembers"])
                        ->where("id", $appointment->id)
                        ->get()
                        ->first()
                )
                ->message("Request appointment successful.")
                ->success()
                ->generate();
        }
    }

    public function testSms()
    {
        $when = Carbon::create("2021-12-14T16:35:00Z")
            ->subHours(8)
            //            ->subMinutes(10)
            ->setTimezone("UTC");

        Mail::to("gwencaguiat@gmail.com")->send(
            new AppointmentReminderMail([
                "time" => "2:22pm",
                "link" => $when,
            ])
        );

        echo $when;
    }

    public function getDoctorAppointmentSchedule($id)
    {
        $doctorAppointments = AppointmentMember::with(["appointment"])
            ->where("user_id", $id)
            ->where("type", "doctor")
            ->get()
            ->pluck("appointment.appointment_date");

        return customResponse()
            ->data($doctorAppointments)
            ->message("Get Doctor Appointment Schedule Successful.")
            ->success()
            ->generate();
    }

    public function getPatientAppointments($id)
    {
        $patientAppointments = AppointmentMember::with(["appointment"])
            ->where("user_id", $id)
            ->where("type", "patient")
            ->get();

        return customResponse()
            ->data($patientAppointments)
            ->message("Get Patient Appointment is Successful.")
            ->success()
            ->generate();
    }
    public function getDoctorAppointments($id)
    {
        $doctorAppointments = AppointmentMember::with(["appointment"])
            ->where("user_id", $id)
            ->where("type", "doctor")
            ->get();

        return customResponse()
            ->data($doctorAppointments)
            ->message("Get Doctor Appointment is Successful.")
            ->success()
            ->generate();
    }
}
