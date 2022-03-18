<?php

namespace Database\Seeders;

use App\Models\ClinicMember;
use App\Models\Location;
use App\Models\Profile;
use App\Models\RoomMember;
use App\Models\User;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clinicDoctorOne = User::create([
            "email" => "clinicdoctor1@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicDoctorProfileOne = Profile::create([
            "first_name" => "Doctor",
            "last_name" => "One",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicDoctorOne->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicDoctorProfileOne->id,
        ]);

        $clinicDoctorMemberOne = ClinicMember::create([
            "member_type" => "doctor",
            "clinic_id" => 1,
            "user_id" => $clinicDoctorOne->id,
        ]);

        RoomMember::create([
            "room_id" => 1,
            "user_id" => $clinicDoctorMemberOne->user_id,
        ]);

        $clinicDoctorTwo = User::create([
            "email" => "clinicdoctor2@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicDoctorProfileTwo = Profile::create([
            "first_name" => "Doctor",
            "last_name" => "Two",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicDoctorTwo->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicDoctorProfileTwo->id,
        ]);

        $clinicDoctorMemberTwo = ClinicMember::create([
            "member_type" => "doctor",
            "clinic_id" => 1,
            "user_id" => $clinicDoctorTwo->id,
        ]);

        RoomMember::create([
            "room_id" => 1,
            "user_id" => $clinicDoctorMemberTwo->user_id,
        ]);

        $clinicDoctorThree = User::create([
            "email" => "clinicdoctor3@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicDoctorProfileThree = Profile::create([
            "first_name" => "Doctor",
            "last_name" => "Three",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicDoctorThree->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicDoctorProfileThree->id,
        ]);

        $clinicDoctorMemberThree = ClinicMember::create([
            "member_type" => "doctor",
            "clinic_id" => 2,
            "user_id" => $clinicDoctorThree->id,
        ]);

        RoomMember::create([
            "room_id" => 2,
            "user_id" => $clinicDoctorMemberThree->user_id,
        ]);

        $clinicDoctorFour = User::create([
            "email" => "clinicdoctor4@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicDoctorProfileFour = Profile::create([
            "first_name" => "Doctor",
            "last_name" => "Four",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicDoctorFour->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicDoctorProfileFour->id,
        ]);

        $clinicDoctorMemberFour = ClinicMember::create([
            "member_type" => "doctor",
            "clinic_id" => 2,
            "user_id" => $clinicDoctorFour->id,
        ]);

        RoomMember::create([
            "room_id" => 2,
            "user_id" => $clinicDoctorMemberFour->user_id,
        ]);

        $clinicDoctorFive = User::create([
            "email" => "clinicdoctor5@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicDoctorProfileFive = Profile::create([
            "first_name" => "Doctor",
            "last_name" => "Five",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicDoctorFive->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicDoctorProfileFive->id,
        ]);

        $clinicDoctorMemberFive = ClinicMember::create([
            "member_type" => "doctor",
            "clinic_id" => 3,
            "user_id" => $clinicDoctorFive->id,
        ]);

        RoomMember::create([
            "room_id" => 3,
            "user_id" => $clinicDoctorMemberFive->user_id,
        ]);

        $clinicDoctorSix = User::create([
            "email" => "clinicdoctor6@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicDoctorProfileSix = Profile::create([
            "first_name" => "Doctor",
            "last_name" => "Six",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicDoctorSix->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicDoctorProfileSix->id,
        ]);

        $clinicDoctorMemberSix = ClinicMember::create([
            "member_type" => "doctor",
            "clinic_id" => 3,
            "user_id" => $clinicDoctorSix->id,
        ]);

        RoomMember::create([
            "room_id" => 3,
            "user_id" => $clinicDoctorMemberSix->user_id,
        ]);
    }
}
