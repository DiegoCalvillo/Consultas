<?php

use Illuminate\Database\Seeder;

class TEquipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_equipos')->insert([
        		'nombre_tipo_equipo' => 'PC',
        		'descripcion' => 'Computadoras normales',
        	]);
    }
}
