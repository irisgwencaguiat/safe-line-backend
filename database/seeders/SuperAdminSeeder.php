<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "email" => "superadmin@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "super_admin",
        ]);

        $profile = Profile::create([
            "first_name" => "Super",
            "last_name" => "Admin",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $user->id,
        ]);

        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => "14.609620010574854",
            "longitude" => "120.97416048092485",
            "profile_id" => $profile->id,
        ]);
    }
}
