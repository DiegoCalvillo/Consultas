<?php

namespace Consultas;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
	protected $table = 'Equipos';

    protected $fillable = ['id', 'nombre_equipo', 'direccion_ip', 'tipoequipo_id', 'usuario_equipo', 'contraseña_equipo', 'centros_id', 'sistemas_ops_id'];

    public function Centros()
    {
        return $this->belongsTo(centros::class);
    }

   public function TipoEquipo()
   {
        return $this->belongsTo(TipoEquipo::class, 'tipoequipo_id');
   }

   public function SistemasOp()
   {
      return $this->belongsTo(SistemasOp::class, 'sistemas_ops_id');
   }

} 
 