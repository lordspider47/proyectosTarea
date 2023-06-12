<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('proyectos', App\Http\Controllers\ProyectoController::class)->middleware('auth');

Route::get('/pdf', [App\Http\Controllers\ProyectoController::class, 'getPDF'])->name('proyecto.pdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
