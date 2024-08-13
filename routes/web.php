<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\Web\LoginController;
use Illuminate\Support\Facades\Route;

/*
@author: jeetendra Parmar
@uses: routes
*/

// Login 
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Patient Routes
Route::get('/patients', [PatientController::class, 'index'])->name('patients.list');
Route::get('/patient-details/{id}', [PatientController::class, 'patientDetail']);
Route::get('/more-info/{id}', [PatientController::class, 'patientInfo']);


Route::get('/reports', function () {
    return view('reports');
});

Route::get('/appointments', function () {
    return view('appointments');
})->name('patients.appointment');
