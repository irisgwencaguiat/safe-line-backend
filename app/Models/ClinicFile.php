<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicFile extends Model
{
    use HasFactory;

    protected $fillable = ["clinic_id", "file_url"];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
