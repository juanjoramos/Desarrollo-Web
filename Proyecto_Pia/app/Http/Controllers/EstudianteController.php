<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Institucion;

class EstudianteController extends Controller
{
    public function index() {
        return view('estudiantes.index', ['estudiantes' => Estudiante::all()]);
    }

    public function create() {
        return view('estudiantes.create', [
            'instituciones' => Institucion::all()
        ]);
    }

    public function store(Request $request) {
        Estudiante::create($request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:estudiantes',
            'codigo' => 'required|unique:estudiantes'
        ]));
        return redirect()->route('estudiantes.index');
    }

    public function edit(Estudiante $estudiante) {
        return view('estudiantes.edit', [
            'estudiante' => $estudiante,
            'instituciones' => Institucion::all()
        ]);
    }

    public function update(Request $request, Estudiante $estudiante) {
        $estudiante->update($request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:estudiantes,correo,' . $estudiante->id,
            'codigo' => 'required|unique:estudiantes,codigo,' . $estudiante->id
        ]));
        return redirect()->route('estudiantes.index');
    }

    public function destroy(Estudiante $estudiante) {
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }
}