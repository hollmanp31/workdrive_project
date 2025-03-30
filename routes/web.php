<?php

use App\Http\Controllers\Principal\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [HomeController::class, 'index'])->name('index'); 
Route::get('/index1', [HomeController::class, 'index1'])->name('index1'); 
Route::get('/inicio', [HomeController::class, 'inicio'])->name('inicio'); 
Route::get('/usuarios', [HomeController::class, 'usuarios'])->name('usuarios'); 
Route::get('/permisos', [HomeController::class, 'permisos'])->name('permisos'); 
// Rutas para las demás secciones 