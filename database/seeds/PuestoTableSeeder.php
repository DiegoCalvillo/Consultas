<?php

use Illuminate\Database\Seeder;

class PuestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puestos')->insert([
        		'nombre_puesto' => 'Direccion',
        		'descripcion_puesto' => 'Encargado de los procesos que se llevan a cabo en MDY',
        	]);
    }
}
