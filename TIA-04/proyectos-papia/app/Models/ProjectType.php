<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProyecto extends Model
{
    protected $table = 'tipo_proyecto'; 

    protected $primaryKey = 'tipo_proyecto_id'; 

    protected $fillable = ['nombre'];
}
