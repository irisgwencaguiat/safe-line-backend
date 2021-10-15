<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $with = ["roomMembers", "chats"];

    protected $fillable = ["room_type", "name", "clinic_id"];

    public function roomMembers()
    {
        return $this->hasMany(RoomMember::class);
    }

    public function chats()
    {
        return $this->hasMany(Chat::class)->orderBy("created_at", "DESC");
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
