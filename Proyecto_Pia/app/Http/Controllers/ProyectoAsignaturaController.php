<?php

namespace App\Http\Controllers;

use App\Models\ProyectoAsignatura;
use App\Models\Proyecto;
use App\Models\Asignatura;
use App\Models\Docente;
use App\Models\TipoProyecto;
use Illuminate\Http\Request;

class ProyectoAsignaturaController extends Controller
{

    public function index()
    {   
        $proyectoAsignaturas = ProyectoAsignatura::with(['proyecto', 'asignatura', 'docente'])->get();
        return view('proyecto_asignaturas.index', compact('proyectoAsignaturas'));
    }

    public function create()
    {
        return view('proyecto_asignaturas.create', [
            'proyectos' => Proyecto::all(),
            'asignaturas' => Asignatura::all(),
            'docentes' => Docente::all(),
            'tiposProyecto' => TipoProyecto::all(),
        ]);
    }

    public function edit($id)
    {
        $proyectoAsignatura = ProyectoAsignatura::findOrFail($id);

        return view('proyecto_asignaturas.edit', [
            'proyectoAsignatura' => $proyectoAsignatura,
            'proyectos' => Proyecto::all(),
            'asignaturas' => Asignatura::all(),
            'docentes' => Docente::all(),
        ]);
    }
}