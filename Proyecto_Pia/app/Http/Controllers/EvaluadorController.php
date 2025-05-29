<?php

namespace App\Http\Controllers;

use App\Models\Evaluador;
use Illuminate\Http\Request;

class EvaluadorController extends Controller
{
    public function index() {
        return view('evaluadores.index', ['evaluadores' => Evaluador::all()]);
    }

    public function create() {
        return view('evaluadores.create');
    }

    public function store(Request $request) {
        Evaluador::create($request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:evaluadores',
            'especialidad' => 'nullable'
        ]));
        return redirect()->route('evaluadores.index');
    }

    public function edit(Evaluador $evaluador) {
        return view('evaluadores.edit', compact('evaluador'));
    }

    public function update(Request $request, Evaluador $evaluador) {
        $evaluador->update($request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:evaluadores,correo,' . $evaluador->id,
            'especialidad' => 'nullable'
        ]));
        return redirect()->route('evaluadores.index');
    }

    public function destroy(Evaluador $evaluador) {
        $evaluador->delete();
        return redirect()->route('evaluadores.index');
    }
}