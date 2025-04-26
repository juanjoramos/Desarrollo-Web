<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoProyecto;

class TipoProyectoSeeder extends Seeder
{
    public function run(): void
    {
        TipoProyecto::insert([
            ['nombre' => 'PA'],
            ['nombre' => 'PIA'],
        ]);
    }
}