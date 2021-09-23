<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public $with = ["contacts", "location"];

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

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
