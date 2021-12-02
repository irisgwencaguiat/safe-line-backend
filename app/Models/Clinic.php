<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    public $with = [
        "location",
        "clinicMembers",
        "clinicServices",
        "clinicFiles",
    ];

    protected $fillable = [
        "name",
        "slug",
        "opening_time",
        "closing_time",
        "status",
        "user_id",
    ];

    public function clinicMembers()
    {
        return $this->hasMany(ClinicMember::class);
    }

    public function clinicServices()
    {
        return $this->hasMany(ClinicService::class);
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function clinicFiles()
    {
        return $this->hasMany(ClinicFile::class);
    }

    public function roomMembers()
    {
        return $this->hasMany(RoomMember::class);
    }

    public function chats()
    {
        return $this->HasMany(Chat::class);
    }

    public function room()
    {
        return $this->HasOne(Room::class);
    }

    public function appointments()
    {
        return $this->hasMany(AppointmentMember::class);
    }
}
