<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoAsignatura extends Model
{
    use HasFactory;

    protected $table = 'proyecto_asignaturas';

    protected $fillable = [
        'proyecto_id',
        'asignatura_id',
        'docente_id',
        'grupo',
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }
}