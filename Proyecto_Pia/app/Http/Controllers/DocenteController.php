<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index() {
        return view('docentes.index', ['docentes' => Docente::all()]);
    }

    public function create() {
        return view('docentes.create');
    }

    public function store(Request $request) {
        Docente::create($request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:docentes',
            'telefono' => 'nullable'
        ]));
        return redirect()->route('docentes.index');
    }

    public function edit(Docente $docente) {
        return view('docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente) {
        $docente->update($request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:docentes,correo,' . $docente->id,
            'telefono' => 'nullable'
        ]));
        return redirect()->route('docentes.index');
    }

    public function destroy(Docente $docente) {
        $docente->delete();
        return redirect()->route('docentes.index');
    }
}