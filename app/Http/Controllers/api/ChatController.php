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
        $newChat = Chat::with(["room", "user"])
            ->where("id", $chat->id)
            ->get()
            ->first();
        event(new \App\Events\CreateChat($request->input("room_id"), $newChat));
        return customResponse()
            ->data($newChat)
            ->message("Request appointment successful.")
            ->success()
            ->generate();
    }
}
