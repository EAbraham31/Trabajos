<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para Carreras (CRUD completo)
Route::resource('carreras', CarreraController::class);

// Rutas para Estudiantes (CRUD completo)  
Route::resource('estudiantes', EstudianteController::class);

// Ruta adicional para la página de inicio del CRUD
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');