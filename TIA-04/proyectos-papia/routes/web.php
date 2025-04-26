<?php

use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TipoProyectoController;

Route::resource('proyectos', ProyectoController::class);
Route::resource('tipoproyecto', TipoProyectoController::class);