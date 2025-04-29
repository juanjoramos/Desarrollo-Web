<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo_animal',
        'raza',
        'edad',
        'precio',
        'fecha_ingreso',
        'vendido',
    ];

    protected $casts = [
        'fecha_ingreso' => 'date',
        'vendido' => 'boolean',
    ];
}