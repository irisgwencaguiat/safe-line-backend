<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Symptom\RecommendSpecialist;
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

    public function recommendSpecialist(RecommendSpecialist $request)
    {
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

        info(env("INFERMEDICA_APP_ID"));

        $recommendation = Http::withHeaders([
            "App-Id" => env("INFERMEDICA_APP_ID"),
            "App-Key" => env("INFERMEDICA_APP_KEY"),
            "Content-Type" => "application/json",
        ])
            ->post(
                "https://api.infermedica.com/v3/recommend_specialist",
                $requestBody
            )
            ->json();


        if ($recommendation["recommended_channel"] !== "personal_visit") {
            $recommendation["recommended_channel"] = "video_teleconsultation";
        }
        return customResponse()
            ->data($recommendation)
            ->message("Getting Specialist Recommendation successful.")
            ->success()
            ->generate();
    }
}
