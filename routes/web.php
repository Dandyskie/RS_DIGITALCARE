<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\TreatmentController;


Route::get('/', function () {
    return view('home');
});

// Route CRUD untuk Manajemen Pasien
Route::resource('patients', PatientController::class);

// Route CRUD untuk Manajemen Dokter
Route::resource('doctors', DoctorController::class);

// Route CRUD untuk Kunjungan Pasien
Route::resource('visits', VisitController::class);

// Route CRUD untuk Tindakan Medis
Route::resource('treatments', TreatmentController::class);

//Route CRUD untuk menampilkan kunjungan
Route::get('/visits/{id}', [VisitController::class, 'show'])->name('visits.show');

