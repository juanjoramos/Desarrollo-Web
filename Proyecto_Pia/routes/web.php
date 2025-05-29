<?php

use App\Http\Controllers\TipoProyectoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EvaluadorController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\ProyectoAsignaturaController;
use App\Http\Controllers\ProyectoEvaluacionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * Todas las opciones del Menú
     */
    Route::resource('tipo-proyectos', TipoProyectoController::class);
    Route::resource('asignaturas', AsignaturaController::class);
    Route::resource('proyectos', ProyectoController::class);
    Route::resource('instituciones', InstitucionController::class);
    Route::resource('facultades', FacultadController::class);
    Route::resource('departamentos', DepartamentoController::class);
    Route::resource('programas', ProgramaController::class);
    Route::resource('docentes', DocenteController::class);
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('evaluadores', EvaluadorController::class);
    Route::resource('evaluaciones', EvaluacionController::class);
    Route::resource('proyecto_asignaturas', ProyectoAsignaturaController::class);
    Route::resource('proyecto_evaluaciones', ProyectoEvaluacionController::class);
});

require __DIR__.'/auth.php';
