<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "gender",
        "birthday",
        "image_url",
        "user_id",
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
