<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolController;
use App\Http\Controllers\permisoController;
use App\Http\Controllers\personaController;
use App\Http\Controllers\provinciasController;
use App\Http\Controllers\publicacionController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\categoriaController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PublicacionController::class, 'welcome']);

Route::get('nosotros', function () {
    return view('mainPage.Nosotros');
});

Route::get('destinos', [provinciasController::class, 'showDestinos']);
Route::resource('provincias', provinciasController::class);
Route::get('categoria/{provincia}', [PublicacionController::class, 'filtrar'])->name('publicaciones.filtrar');
Route::get('post/{publicacion}', [publicacionController::class, 'post'])->name('publicaciones.show');
Route::get('gastronomia', [publicacionController::class, 'gastronomia'])->name('gastronomia');
Route::resource('rol', rolController::class);
Route::resource('permiso', permisoController::class);
Route::resource('persona', personaController::class);
Route::resource('publicacion', publicacionController::class);
Route::resource('usuario', usuarioController::class);
Route::resource('category', categoriaController::class);

Route::get('/inicio', function () {
    return view('admin/layouts/admin');
});

Route::get('blog', [publicacionController::class, 'blog']);

Route::get('galeria', [publicacionController::class, 'galeria']);

/*Route::middleware(['auth:sanctum', 'verified'])->get('/publicaciones',  publicacionController::class)->name('publicaciones');*/

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('admin/layouts/admin');
})->name('dash');
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
