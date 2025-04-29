<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;

Route::get('/mascotas', [MascotaController::class, 'index']);
Route::get('/mascotas/create', [MascotaController::class, 'create']);
Route::post('/mascotas', [MascotaController::class, 'store']);