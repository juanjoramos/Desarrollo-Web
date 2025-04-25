<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required|in:PA,PIA',
            'descripcion' => 'required',
            'metodologia' => 'required',
            'docente' => 'required',
        ]);

        Proyecto::create($request->all());

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente.');
    }

    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required|in:PA,PIA',
            'descripcion' => 'required',
            'metodologia' => 'required',
            'docente' => 'required',
        ]);

        $proyecto->update($request->all());

        return redirect()->route('proyectos.index')->with('success', 'Proyecto actualizado exitosamente.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}