<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('tipoproyecto.index', compact('tipos'));
    }
}
