<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = 'departamentos';
    protected $primaryKey = 'departamento_id';

    // Tipo de clave primaria y autoincremento
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'nombre',
        'facultad_id',
    ];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'facultad_id');
    }
}
