<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('alumnos', App\Http\Controllers\AlumnoController::class);
Route::resource('aseos', App\Http\Controllers\AseoController::class);
Route::resource('solicitudes', App\Http\Controllers\SolicitudController::class);    
