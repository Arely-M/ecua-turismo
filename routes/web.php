<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolController;
use App\Http\Controllers\permisoController;
use App\Http\Controllers\personaController;
use App\Http\Controllers\publicacionController;
use App\Http\Controllers\usuarioController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('rol', rolController::class);
Route::resource('permiso', permisoController::class);
Route::resource('persona', personaController::class);
Route::resource('publicacion', publicacionController::class);
Route::resource('usuario', usuarioController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
