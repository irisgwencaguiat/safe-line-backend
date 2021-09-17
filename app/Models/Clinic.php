<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "opening_time",
        "closing_time",
        "is_verified",
    ];

    public function clinicMembers()
    {
        return $this->hasMany(ClinicMember::class);
    }

    public function clinicServices()
    {
        return $this->hasMany(ClinicService::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
