<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $with = ["clinic"];

    public $fillable = [
        "type",
        "zoom_link",
        "appointment_time",
        "appointment_date",
        "clinic_id",
    ];

    public function appointmentMembers()
    {
        return $this->hasMany(AppointmentMember::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
