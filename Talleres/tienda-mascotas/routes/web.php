<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;

Route::get('/mascotas', [MascotaController::class, 'index']);