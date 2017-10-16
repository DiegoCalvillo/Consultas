<?php

namespace Consultas;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    protected $table = 'puestos';

    protected $fillable = ['id', 'nombre_puesto', 'descripcion_puesto'];
}
