<?php

namespace App\Http\Controllers\api;

use App\Events\CreateChat;
use App\Events\ExistingRoom;
use App\Events\NewRoom;
use App\Http\Controllers\Controller;
use App\Http\Requests\Appointment\RequestAppointment;
use App\Models\Chat;
use App\Models\Clinic;
use App\Models\ClinicMember;
use App\Models\Room;
use App\Models\RoomMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            echo Auth::id();
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
}
