<?php

namespace Consultas;

use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    protected $table = 'tipo_equipos';

    protected $fillable = ['id', 'nombre_tipo_equipo', 'descripcion'];
}
