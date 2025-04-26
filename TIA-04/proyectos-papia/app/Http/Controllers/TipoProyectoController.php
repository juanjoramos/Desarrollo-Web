<?php

namespace App\Http\Controllers;

use App\Models\TipoProyecto; 
use Illuminate\Http\Request;

class TipoProyectoController extends Controller
{
    public function index()
    {
        $tipos = TipoProyecto::all(); 
        return view('tipoproyecto.index', compact('tipos'));
    }
}