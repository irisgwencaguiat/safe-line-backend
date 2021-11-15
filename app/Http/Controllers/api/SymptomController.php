<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SymptomController extends Controller
{
    public function getSymptoms(Request $request)
    {
        $search = "%" . $request->get("search") . "%";
        $symptoms = $request->has("search")
            ? Symptom::where("common_name", "LIKE", $search)
                ->orWhere("name", "LIKE", $search)
                ->get()
            : Symptom::all();

        return customResponse()
            ->data($symptoms)
            ->message("Getting Symptoms is successful.")
            ->success()
            ->generate();
    }

    public function recommendSpecialist(Request $request)
    {
        //        $request->headers->set("App-Id", env("INFERMEDICA_APP_ID"));
        //        $request->headers->set("App-Key", env("INFERMEDICA_APP_KEY"));
        //        $request->headers->set("Content-Type", "application/json");

        $symptomIds = explode(",", $request->input("symptoms_id"));
        $evidence = [];
        foreach ($symptomIds as $symptomId) {
            array_push($evidence, [
                "id" => $symptomId,
                "choice_id" => "present",
            ]);
        }

        $requestBody = [
            "sex" => $request->input("sex"),
            "age" => [
                "value" => $request->input("age"),
            ],
            "evidence" => $evidence,
        ];

        $testExample = Http::withHeaders([
            "App-Id" => env("INFERMEDICA_APP_ID"),
            "App-Key" => env("INFERMEDICA_APP_KEY"),
            "Content-Type" => "application/json",
        ])
            ->post(
                "https://api.infermedica.com/v3/recommend_specialist",
                $requestBody
            )
            ->json();
        return customResponse()
            ->data($testExample)
            ->message("Getting Specialist Recommendation successful.")
            ->success()
            ->generate();
    }
}
