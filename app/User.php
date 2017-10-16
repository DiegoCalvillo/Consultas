<?php

namespace Consultas;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'puesto_id', 'activo', 'username', 'SARE', 'password', 'centros_id', 'estatus_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Puesto() //Se relaciona la tabla Users con la tabla Puestos, llave foranea puesto_id
    {
        return $this->belongsTo(Puesto::class);
    }

    public function centros() //Se relaciona la tabla Users con la tabla centros, llave foranea centros_id
    {
        return $this->belongsTo(centros::class);
    }

    public function Estatus()
    {
        return $this->belongsTo(Estatus::class);
    }
}
