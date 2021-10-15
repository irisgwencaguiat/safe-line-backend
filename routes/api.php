<?php

use App\Http\Controllers\api\AppointmentController;
use App\Http\Controllers\api\AuthenticationController;
use App\Http\Controllers\api\ChatController;
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
        Route::post("/members", [
            ClinicController::class,
            "CreateClinicMember",
        ]);
        Route::post("/services", [
            ClinicController::class,
            "CreateClinicService",
        ]);
        Route::get("/", [ClinicController::class, "getClinics"]);
        Route::get("/services/{id}", [
            ClinicController::class,
            "getClinicService",
        ]);
        Route::get("/{id}", [ClinicController::class, "getClinic"]);
        Route::put("/", [ClinicController::class, "updateClinicStatus"]);
    });
Route::middleware("auth:api")
    ->prefix("appointments")
    ->group(function () {
        Route::post("/request", [
            AppointmentController::class,
            "requestAppointment",
        ]);
    });

Route::middleware("auth:api")
    ->prefix("chats")
    ->group(function () {
        Route::post("/", [ChatController::class, "createChat"]);
        Route::get("/rooms/direct", [
            ChatController::class,
            "fetchDirectRooms",
        ]);
        Route::get("/rooms/group", [ChatController::class, "fetchGroupRooms"]);
        Route::get("/{id}", [ChatController::class, "fetchChats"]);
    });
