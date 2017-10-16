<?php

namespace Consultas;

use Illuminate\Database\Eloquent\Model;

class Aplicativos extends Model
{
    protected $table = 'aplicativos';

    protected $fillable = ['id', 'nombre_aplicativo', 'ubicacion_servidor', 'link_aplicativo'];
}
