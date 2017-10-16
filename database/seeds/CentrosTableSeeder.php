<?php

use Illuminate\Database\Seeder;

class CentrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centros')->insert([
        		'nombre_centro' => 'Guadalupe',
        	]);
    }
}
