<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        Proyecto::create([
            'nombre' => 'Proyecto de Matemáticas',
            'tipo' => 'PA',
            'descripcion' => 'Proyecto para mejorar el aprendizaje de matemáticas.',
            'metodologia' => 'ABP',
            'docente' => 'Juan Pérez',
        ]);
    }
}
