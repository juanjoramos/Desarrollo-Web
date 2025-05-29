<?php

use App\Http\Controllers\TipoProyectoController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\ProgramaController;
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
});

require __DIR__.'/auth.php';
