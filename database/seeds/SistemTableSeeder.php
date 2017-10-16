<?php

use Illuminate\Database\Seeder;

class SistemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sistemas_ops')->insert([
        		'nombre_sistema_op' => 'Windows 7',
        	]);
    }
}
