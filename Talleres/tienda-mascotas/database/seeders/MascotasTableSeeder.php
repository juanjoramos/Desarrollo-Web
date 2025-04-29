<?php

namespace Database\Seeders;

use App\Models\Mascota;
use Illuminate\Database\Seeder;

class MascotasTableSeeder extends Seeder
{
    public function run(): void
    {
        Mascota::create([
            'nombre' => 'Firulais',
            'tipo_animal' => 'perro',
            'raza' => 'Labrador',
            'edad' => 2,
            'precio' => 150.50,
            'fecha_ingreso' => '2023-05-15',
            'vendido' => false,
        ]);

        Mascota::create([
            'nombre' => 'Michi',
            'tipo_animal' => 'gato',
            'raza' => 'Siamés',
            'edad' => 1,
            'precio' => 200.00,
            'fecha_ingreso' => '2023-06-10',
            'vendido' => true,
        ]);

        // Agrega más mascotas si lo deseas
    }
}