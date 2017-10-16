<?php

namespace Consultas;

use Illuminate\Database\Eloquent\Model;

class centros extends Model
{
    protected $table = 'centros';

    protected $fillable = ['id', 'nombre_centro'];
}
