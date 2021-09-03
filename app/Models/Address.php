<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "street",
        "city",
        "region",
        "zip_code",
        "profile_id",
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
