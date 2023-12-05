<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\PlanFormacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\ResponsablePIDController;
use App\Http\Controllers\SETController;
use App\Http\Controllers\TareasController;
use App\Models\Profesor;
use App\Models\ResponsablePID;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('profesor',ProfesorController::class);
Route::resource('set',SETController::class);
Route::resource('plan',PlanFormacionController::class);
Route::resource('tarea',TareasController::class);
Route::resource('estudiantes',EstudiantesController::class);
Route::resource('asistencia',AsistenciaController::class);
Route::resource('responsable',ResponsablePIDController::class);





