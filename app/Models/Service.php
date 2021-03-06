<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $keyType = "string";

    protected $fillable = ["id", "name", "slug"];

    public function clinicService()
    {
        return $this->hasMany(ClinicService::class);
    }
}
