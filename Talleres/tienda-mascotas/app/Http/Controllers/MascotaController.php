<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    // Mostrar el formulario
    public function create()
    {
        return view('mascotas.create');
    }

    // Guardar nueva mascota
    public function store(Request $request)
    {
        Mascota::create($request->all());

        return redirect('/mascotas')->with('success', 'Mascota creada exitosamente.');
    }

}