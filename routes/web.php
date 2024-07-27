<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointementController;

//Route ne s'affiche que lorsque l'utilisateur est hors ligne.
// Route::middleware('guest')->group(function(){
    Route::get('login', [AuthController::class, 'login_page'])->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('submit_login');
    // web.php
    Route::post('/register', [AuthController::class, 'register'])->name('register');

// });

    // Route::middleware('connected')->group(function(){

        //Ces routes ne s'affiche que lorsque l'utilisateur est connecté

        Route::get('/', [AuthController::class, 'index'])->name('dashboard');

        Route::prefix('patients')->group(function(){
            Route::get('/', [PatientController::class, 'index'])->name('patient');
            Route::get('create', [PatientController::class, 'create'])->name('patients.create');
            Route::post('store', [PatientController::class, 'store'])->name('patient.store');
            Route::get('patient/edit/{patient}', [PatientController::class, 'edit'])->name('patient.edit');
            Route::put('patient/update/{patient}', [PatientController::class, 'update'])->name('patient.update');
        });

        Route::prefix('employers')->group(function(){
            Route::get('/', [EmployeController::class, 'index'])->name('employer');
            Route::get('/employe/edit/{employer}', [EmployeController::class, 'edit'])->name('employer.edit');
            Route::put('/employe/update/{employer}', [EmployeController::class, 'update'])->name('employer.update');
            Route::get('/create', [EmployeController::class, 'create'])->name('employer.create');
        });

        Route::prefix('appointements')->group(function(){
            Route::get('/', [AppointementController::class, 'index'])->name('appointements');
            Route::get('/create', [AppointementController::class, 'create'])->name('appointement.create');
        });

    // });


