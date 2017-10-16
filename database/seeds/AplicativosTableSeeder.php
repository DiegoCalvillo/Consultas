<?php

use Illuminate\Database\Seeder;

class AplicativosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aplicativos')->insert([
        		'nombre_aplicativo' => 'Consultas',
        		'ubicacion_servidor' => '10.100.40.2',
        		'link_aplicativo' => 'http://10.100.40.2:8080/inicio',
        	]);
    }
}
