<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = User::create([
            "email" => "patient1@gmail.com",
            "password" => bcrypt("123456789"),
            "user_type" => "patient",
        ]);

        $profile = Profile::create([
            "first_name" => "11/88",
            "last_name" => "Mall",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $patient->id,
        ]);

        Location::create([
            "address" => "11/88 shopping mall",
            "latitude" => 14.604804848881656,
            "longitude" => 120.97364576265598,
            "profile_id" => $profile->id,
        ]);
    }
}
