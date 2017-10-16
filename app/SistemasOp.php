<?php

namespace Consultas;

use Illuminate\Database\Eloquent\Model;

class SistemasOp extends Model
{
    protected $table = 'sistemas_ops';

    protected $fillable = ['id', 'nombre_sistema_op'];
}
