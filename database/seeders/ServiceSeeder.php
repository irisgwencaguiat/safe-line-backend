<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            "name" => "Cardiology",
            "slug" => "cardiology",
        ]);
        Service::create([
            "name" => "Dentistry",
            "slug" => "dentistry",
        ]);
        Service::create([
            "name" => "Dermatology",
            "slug" => "dermatology",
        ]);
        Service::create([
            "name" => "Ear, Nose and Throat",
            "slug" => "ear_nose_and_throat",
        ]);
        Service::create([
            "name" => "Gastroenterology",
            "slug" => "gastroenterology",
        ]);
        Service::create([
            "name" => "Gynecology and Obstetrics",
            "slug" => "gynecology_and_obstetrics",
        ]);
        Service::create([
            "name" => "Neurology",
            "slug" => "neurology",
        ]);
        Service::create([
            "name" => "Nutrition",
            "slug" => "nutrition",
        ]);
        Service::create([
            "name" => "Oncology",
            "slug" => "oncology",
        ]);
        Service::create([
            "name" => "Ophthalmology",
            "slug" => "ophthalmology",
        ]);
        Service::create([
            "name" => "Orthopedics",
            "slug" => "orthopedics",
        ]);
        Service::create([
            "name" => "Podiatry",
            "slug" => "podiatry",
        ]);
        Service::create([
            "name" => "Physical Therapy",
            "slug" => "physical therapy",
        ]);
        Service::create([
            "name" => "Sports Medicine",
            "slug" => "sports medicine",
        ]);
        Service::create([
            "name" => "Urology",
            "slug" => "urology",
        ]);
    }
}
