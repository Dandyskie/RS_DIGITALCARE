<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\VisitController;

Route::apiResource('patients', PatientController::class);
Route::apiResource('doctors', DoctorController::class);
Route::apiResource('treatments', TreatmentController::class);
Route::apiResource('visits', VisitController::class);
Route::post('/visits/{visit}/add-treatment', [VisitController::class, 'addTreatment']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
