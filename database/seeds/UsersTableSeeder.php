<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        		'name' => 'Prueba1',
        		'puesto_id' => '2',
        		'activo' => 1,
        		'username' => 'Prb1',
        		'SARE' => 147780,
        		'password' => bcrypt('123456'),
        	]);
    }
}
