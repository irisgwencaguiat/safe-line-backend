<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [];
        array_push($services, ["name" => "Allergologist", "id" => "sp_23"]);
        array_push($services, ["name" => "Angiologist", "id" => "sp_21"]);
        array_push($services, ["name" => "Cardiologist", "id" => "sp_12"]);
        array_push($services, ["name" => "Dentist", "id" => "sp_18"]);
        array_push($services, ["name" => "Dermatologist", "id" => "sp_9"]);
        array_push($services, ["name" => "Diabetologist", "id" => "sp_22"]);
        array_push($services, ["name" => "Endocrinologist", "id" => "sp_10"]);
        array_push($services, ["name" => "ENT doctor", "id" => "sp_14"]);
        array_push($services, ["name" => "Gastroenterologist", "id" => "sp_5"]);
        array_push($services, [
            "name" => "General Practitioner",
            "id" => "sp_1",
        ]);
        array_push($services, ["name" => "Gynecologist", "id" => "sp_15"]);
        array_push($services, ["name" => "Hematologist", "id" => "sp_25"]);
        array_push($services, ["name" => "Infectiologist", "id" => "sp_19"]);
        array_push($services, [
            "name" => "Internal Diseases Specialist",
            "id" => "sp_2",
        ]);
        array_push($services, ["name" => "Nephrologist", "id" => "sp_24"]);
        array_push($services, ["name" => "Neurologist", "id" => "sp_17"]);
        array_push($services, ["name" => "Oncologist", "id" => "sp_13"]);
        array_push($services, ["name" => "Ophthalmologist", "id" => "sp_7"]);
        array_push($services, ["name" => "Pediatrician", "id" => "sp_3"]);
        array_push($services, ["name" => "Psychiatrist", "id" => "sp_16"]);
        array_push($services, ["name" => "Pulmonologist", "id" => "sp_27"]);
        array_push($services, ["name" => "Rheumatologist", "id" => "sp_20"]);
        array_push($services, ["name" => "Surgeon", "id" => "sp_4"]);
        array_push($services, ["name" => "Toxicologist", "id" => "sp_8"]);
        array_push($services, ["name" => "Urologist", "id" => "sp_11"]);

        foreach ($services as $service) {
            Service::create([
                "id" => $service["id"],
                "name" => $service["name"],
                "slug" => Str::slug($service["name"]),
            ]);
        }
    }
}
