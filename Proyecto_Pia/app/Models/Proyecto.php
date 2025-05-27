<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model {
    use HasFactory;

    protected $fillable = [
        'titulo',
        'resumen',
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'id_tipo_proyecto'
    ];

    // Definir la relación con TipoProyecto
    public function tipoProyecto() {
        return $this->belongsTo(TipoProyecto::class, 'id_tipo_proyecto');
    }

    // Para manejar fechas automáticamente con mutadores
    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
    ];
}
