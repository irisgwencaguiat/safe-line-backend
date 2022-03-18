<?php

namespace Database\Seeders;

use App\Models\Clinic;
use App\Models\ClinicMember;
use App\Models\ClinicService;
use App\Models\Location;
use App\Models\Profile;
use App\Models\Room;
use App\Models\RoomMember;
use App\Models\User;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clinicAdminOne = User::create([
            "email" => "clinicadmin1@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicAdminProfileOne = Profile::create([
            "first_name" => "Admin",
            "last_name" => "One",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicAdminOne->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicAdminProfileOne->id,
        ]);

        $clinicOne = Clinic::create([
            "name" => "Lucky Chinatown",
            "slug" => "lucky_chinatown",
            "opening_time" => "10:00:00",
            "closing_time" => "6:00:00",
            "user_id" => $clinicAdminOne->id,
            "status" => "approved",
        ]);

        Location::create([
            "address" => "lucky chinatown",
            "latitude" => 14.603300932628251,
            "longitude" => 120.9734163429378,
            "clinic_id" => $clinicOne->id,
        ]);

        ClinicService::create([
            "clinic_id" => $clinicOne->id,
            "service_id" => "sp_18",
        ]);
        ClinicService::create([
            "clinic_id" => $clinicOne->id,
            "service_id" => "sp_9",
        ]);

        $clinicMemberOne = ClinicMember::create([
            "member_type" => "admin",
            "clinic_id" => $clinicOne->id,
            "user_id" => $clinicOne->user_id,
        ]);

        $roomOne = Room::create([
            "name" => $clinicOne->name,
            "room_type" => "group",
            "clinic_id" => $clinicOne->id,
        ]);

        RoomMember::create([
            "room_id" => $roomOne->id,
            "user_id" => $clinicMemberOne->user_id,
        ]);

        $clinicCsrOne = User::create([
            "email" => "cliniccsr1@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicCsrProfileOne = Profile::create([
            "first_name" => "Csr",
            "last_name" => "One",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicCsrOne->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicCsrProfileOne->id,
        ]);

        $clinicCsrMemberOne = ClinicMember::create([
            "member_type" => "csr",
            "clinic_id" => $clinicOne->id,
            "user_id" => $clinicCsrOne->id,
        ]);

        RoomMember::create([
            "room_id" => $roomOne->id,
            "user_id" => $clinicCsrMemberOne->user_id,
        ]);

        $clinicAdminTwo = User::create([
            "email" => "clinicadmin2@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicAdminProfileTwo = Profile::create([
            "first_name" => "Admin",
            "last_name" => "Two",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicAdminTwo->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicAdminProfileTwo->id,
        ]);

        $clinicTwo = Clinic::create([
            "name" => "Divisoria Binondo Mall",
            "slug" => "divisoria_binondo_mall",
            "opening_time" => "10:00:00",
            "closing_time" => "6:00:00",
            "user_id" => $clinicAdminTwo->id,
            "status" => "approved",
        ]);

        Location::create([
            "address" => "Divisoria Binondo Mall",
            "latitude" => 14.602889537716475,
            "longitude" => 120.97222066911486,
            "clinic_id" => $clinicTwo->id,
        ]);

        ClinicService::create([
            "clinic_id" => $clinicTwo->id,
            "service_id" => "sp_18",
        ]);
        ClinicService::create([
            "clinic_id" => $clinicTwo->id,
            "service_id" => "sp_9",
        ]);
        ClinicService::create([
            "clinic_id" => $clinicTwo->id,
            "service_id" => "sp_1",
        ]);

        $clinicMemberTwo = ClinicMember::create([
            "member_type" => "admin",
            "clinic_id" => $clinicTwo->id,
            "user_id" => $clinicTwo->user_id,
        ]);

        $roomTwo = Room::create([
            "name" => $clinicTwo->name,
            "room_type" => "group",
            "clinic_id" => $clinicTwo->id,
        ]);

        RoomMember::create([
            "room_id" => $roomTwo->id,
            "user_id" => $clinicMemberTwo->user_id,
        ]);

        $clinicCsrTwo = User::create([
            "email" => "cliniccsr2@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicCsrProfileTwo = Profile::create([
            "first_name" => "Csr",
            "last_name" => "Two",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicCsrTwo->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicCsrProfileTwo->id,
        ]);

        $clinicCsrMemberTwo = ClinicMember::create([
            "member_type" => "csr",
            "clinic_id" => $clinicTwo->id,
            "user_id" => $clinicCsrTwo->id,
        ]);

        RoomMember::create([
            "room_id" => $roomOne->id,
            "user_id" => $clinicCsrMemberTwo->user_id,
        ]);

        $clinicAdminThree = User::create([
            "email" => "clinicadmin3@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicAdminProfileThree = Profile::create([
            "first_name" => "Admin",
            "last_name" => "Three",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicAdminThree->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicAdminProfileThree->id,
        ]);

        $clinicThree = Clinic::create([
            "name" => "Divisoria Mall",
            "slug" => "divisoria_mall",
            "opening_time" => "10:00:00",
            "closing_time" => "6:00:00",
            "user_id" => $clinicAdminThree->id,
            "status" => "approved",
        ]);

        Location::create([
            "address" => "Divisoria Mall",
            "latitude" => 14.603300932628251,
            "longitude" => 120.9706662931451,
            "clinic_id" => $clinicThree->id,
        ]);

        ClinicService::create([
            "clinic_id" => $clinicThree->id,
            "service_id" => "sp_9",
        ]);
        ClinicService::create([
            "clinic_id" => $clinicThree->id,
            "service_id" => "sp_1",
        ]);

        $clinicMemberThree = ClinicMember::create([
            "member_type" => "admin",
            "clinic_id" => $clinicThree->id,
            "user_id" => $clinicThree->user_id,
        ]);

        $roomThree = Room::create([
            "name" => $clinicThree->name,
            "room_type" => "group",
            "clinic_id" => $clinicThree->id,
        ]);

        RoomMember::create([
            "room_id" => $roomThree->id,
            "user_id" => $clinicMemberThree->user_id,
        ]);

        $clinicCsrThree = User::create([
            "email" => "cliniccsr3@gmail.com",
            "password" => bcrypt("password"),
            "user_type" => "clinic_member",
        ]);

        $clinicCsrProfileThree = Profile::create([
            "first_name" => "Csr",
            "last_name" => "Three",
            "gender" => "Male",
            "birthday" => "2000-05-21",
            "user_id" => $clinicCsrThree->id,
        ]);
        Location::create([
            "address" => "1120 La torre Street, Tondo, Manila",
            "latitude" => 14.609620010574854,
            "longitude" => 120.97416048092485,
            "profile_id" => $clinicCsrProfileThree->id,
        ]);

        $clinicCsrMemberThree = ClinicMember::create([
            "member_type" => "csr",
            "clinic_id" => $clinicThree->id,
            "user_id" => $clinicCsrThree->id,
        ]);

        RoomMember::create([
            "room_id" => $roomThree->id,
            "user_id" => $clinicCsrMemberThree->user_id,
        ]);
    }
}
