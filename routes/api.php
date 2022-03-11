<?php

use App\Http\Controllers\api\AppointmentController;
use App\Http\Controllers\api\AuthenticationController;
use App\Http\Controllers\api\ChatController;
use App\Http\Controllers\api\ClinicController;
use App\Http\Controllers\api\SymptomController;
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

Route::get("/developer/clinics", [ClinicController::class, "getClinics"]);
Route::get("/developer/clinic/services", [ClinicController::class, "getClinicServices"]);
Route::post("/developer/clinics", [ClinicController::class, "developerCreateClinic"]);

Route::prefix("auth")->group(function () {
    Route::post("/signup", [AuthenticationController::class, "signup"]);
    Route::post("/login", [AuthenticationController::class, "login"]);
});

Route::middleware("auth:api")
    ->prefix("clinics")
    ->group(function () {
        Route::post("/", [ClinicController::class, "signup"]);
        Route::post("/files", [ClinicController::class, "uploadClinicFiles"]);
        Route::get("/members/{id}", [
            ClinicController::class,
            "getClinicMembers",
        ]);
        Route::post("/members", [
            ClinicController::class,
            "createClinicMember",
        ]);
        Route::post("/services", [
            ClinicController::class,
            "CreateClinicService",
        ]);
        Route::get("/nearest/{serviceId}", [
            ClinicController::class,
            "getNearestClinic",
        ]);
        Route::get("/", [ClinicController::class, "getClinics"]);
        Route::get("/services", [ClinicController::class, "getClinicServices"]);
        Route::get("/services/{id}", [
            ClinicController::class,
            "getClinicService",
        ]);
        Route::get("/doctors/{id}", [
            ClinicController::class,
            "getClinicDoctors",
        ]);
        Route::get("/{id}", [ClinicController::class, "getClinic"]);
        Route::put("/", [ClinicController::class, "updateClinicStatus"]);
        Route::put("/walk-in", [
            ClinicController::class,
            "updatePatientWalkIn",
        ]);
        Route::put("/covid-patient", [
            ClinicController::class,
            "updateCovidPatient",
        ]);
        Route::get("/covid/services/{id}", [
            ClinicController::class,
            "getCovidServices",
        ]);
        Route::put("/covid/services", [
            ClinicController::class,
            "updateCovidServices",
        ]);
    });

Route::middleware("auth:api")
    ->prefix("appointments")
    ->group(function () {
        Route::post("/", [AppointmentController::class, "createAppointment"]);
        Route::post("/request", [
            AppointmentController::class,
            "requestAppointment",
        ]);
        Route::get("/schedule/doctor/{id}", [
            AppointmentController::class,
            "getDoctorAppointmentSchedule",
        ]);
        Route::get("/patient/{id}", [
            AppointmentController::class,
            "getPatientAppointments",
        ]);
        Route::get("/doctor/{id}", [
            AppointmentController::class,
            "getDoctorAppointments",
        ]);
        Route::post("/sms", [AppointmentController::class, "testSms"]);
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

Route::middleware("auth:api")
    ->prefix("symptoms")
    ->group(function () {
        Route::get("/", [SymptomController::class, "getSymptoms"]);
        Route::post("/specialist", [
            SymptomController::class,
            "recommendSpecialist",
        ]);
    });
