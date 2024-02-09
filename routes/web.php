<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', [Controllers\InicioController::class, 'mostrar'])->name('inicio');

Route::get('/ciclo/{id}', [Controllers\CicloController::class, 'mostrarCiclo'])->name('ciclo');
Route::get('/matriculacion', [Controllers\AlumnoController::class, 'mostrarAlumnos'])->name('matriculacion');
Route::post('/matriculacion/{idAlumno}', [Controllers\ModuloController::class, 'obtenerForm'])->name('matriculacion.form');
Route::get('/matriculacion/{idCiclo}/{idAlumno}', [Controllers\ModuloController::class, 'mostrarModulos'])->name('matriculacion.modulos');
Route::get('/matricular/{idModulo}/{idAlumno}', [Controllers\ModuloController::class, 'insertarMatricula'])->name('matricular');
Route::get('/anular/{idModulo}/{idAlumno}', [Controllers\ModuloController::class, 'anularMatricula'])->name('anular');
Route::get('/profesores', [Controllers\ProfesoresController::class, 'mostrarProfesores'])->name('profesores');
Route::post('/filtrar', [Controllers\ProfesoresController::class, 'getProfesores'])->name('filtrar');
