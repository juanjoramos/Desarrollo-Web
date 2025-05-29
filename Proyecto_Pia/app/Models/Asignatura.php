<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';
    protected $primaryKey = 'asignatura_id';

    protected $fillable = [
        'nombre',
        'codigo',
        'creditos',
        'programa_id',
    ];

    public function programa()
    {
        return $this->belongsTo(Programa::class, 'programa_id');
    }

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_asignaturas')
                    ->withPivot('grupo', 'docente_id')
                    ->withTimestamps();
    }


    public function getRouteKeyName()
    {
        return 'asignatura_id';
    }
}