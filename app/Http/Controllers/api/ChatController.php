<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chat\CreateChat;
use App\Models\Chat;
use App\Models\Room;
use App\Models\RoomMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function createChat(CreateChat $request)
    {
        $chat =
            Auth::user()->user_type === "patient"
                ? Chat::create([
                    "sender_type" => "patient",
                    "user_id" => Auth::id(),
                    "message" => $request->input("message"),
                    "room_id" => $request->input("room_id"),
                ])
                : Chat::create([
                    "sender_type" => "clinic_member",
                    "user_id" => Auth::id(),
                    "message" => $request->input("message"),
                    "room_id" => $request->input("room_id"),
                ]);
        $newChat = Room::with(["lastChat"])
            ->where("id", $request->input("room_id"))
            ->get()
            ->first();
        event(new \App\Events\CreateChat($request->input("room_id"), $newChat));
        return customResponse()
            ->data(true)
            ->message("Chat sent successfully.")
            ->success()
            ->generate();
    }

    public function fetchDirectRooms(Request $request)
    {
        $rooms = Room::with(["lastChat"])
            ->whereHas("roomMembers", function ($query) use ($request) {
                $query
                    ->where("user_id", Auth::id())
                    ->where("room_type", "direct");
            })
            ->orderBy("updated_at", "DESC")
            ->paginate(
                (int) $request->get("per_page", 10),
                ["*"],
                "page",
                (int) $request->get("page", 1)
            );

        return customResponse()
            ->data($rooms)
            ->message("Direct rooms fetched successful.")
            ->success()
            ->generate();
    }

    public function fetchGroupRooms(Request $request)
    {
        $rooms = Room::with(["lastChat"])
            ->whereHas("roomMembers", function ($query) use ($request) {
                $query
                    ->where("user_id", Auth::id())
                    ->where("room_type", "group");
            })
            ->orderBy("updated_at", "DESC")
            ->paginate(
                (int) $request->get("per_page", 10),
                ["*"],
                "page",
                (int) $request->get("page", 1)
            );
        return customResponse()
            ->data($rooms)
            ->message("Group rooms fetched successful.")
            ->success()
            ->generate();
    }

    public function fetchChats(Request $request, $id)
    {
        $chats = Chat::with(["user"])
            ->where("room_id", (int) $id)
            ->orderBy("created_at", "DESC")
            ->paginate(
                (int) $request->get("per_page", 10),
                ["*"],
                "page",
                (int) $request->get("page", 1)
            );

        return customResponse()
            ->data($chats)
            ->message("Chats fetched successful.")
            ->success()
            ->generate();
    }
}
