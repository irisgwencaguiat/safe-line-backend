<?php

use App\Http\Controllers\api\AuthenticationController;
use App\Http\Controllers\api\ClinicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix("auth")->group(function () {
    Route::post("/signup", [AuthenticationController::class, "signup"]);
    Route::post("/login", [AuthenticationController::class, "login"]);
});

Route::middleware("auth:api")
    ->prefix("clinics")
    ->group(function () {
        Route::post("/", [ClinicController::class, "signup"]);
        Route::post("/files", [ClinicController::class, "uploadClinicFiles"]);
        Route::get("/", [ClinicController::class, "getClinics"]);
        Route::get("/{id}", [ClinicController::class, "getClinic"]);
        Route::put("/", [ClinicController::class, "updateClinicStatus"]);
    });
