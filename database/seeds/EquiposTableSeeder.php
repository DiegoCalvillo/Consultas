<?php

use Illuminate\Database\Seeder;

class EquiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipos')->insert([
        	'nombre_equipo' => 'Equipo Prueba1',
        	'direccion_ip' => '10.100.0.0',
        	'tipo_equipo' => 1,
        	'usuario_equipo' => 'Administrador',
        	'contraseña_equipo' => '123456'
        	]);
    }
}





