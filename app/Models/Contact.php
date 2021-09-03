<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ["name", "contact", "profile_id"];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
