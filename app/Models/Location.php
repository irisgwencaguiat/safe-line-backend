<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $casts = [
        "latitude" => "double",
        "longitude" => "double",
    ];
    protected $fillable = [
        "address",
        "latitude",
        "longitude",
        "profile_id",
        "clinic_id",
    ];

    protected $hidden = ["profile_id", "clinic_id"];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
