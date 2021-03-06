<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $with = ["profile"];
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ["email", "password", "user_type", "has_clinic"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    protected $casts = [
        "email_verified_at" => "datetime",
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function clinicMember()
    {
        return $this->hasOne(ClinicMember::class);
    }

    public function roomMembers()
    {
        return $this->hasMany(RoomMember::class);
    }

    public function chatSeens()
    {
        return $this->HasMany(ChatSeen::class);
    }

    public function chats()
    {
        return $this->HasMany(Chat::class);
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

    public function sendPasswordResetNotification($token) {
        $this->notify(new \App\Notifications\MailResetPasswordNotification($token));
    }
}
