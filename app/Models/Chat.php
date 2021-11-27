<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $touches = ["room"];

    protected $with = ["user"];
    protected $fillable = ["message", "user_id", "room_id", "sender_type"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function clinicMember()
    {
        return $this->belongsTo(ClinicMember::class);
    }
}
