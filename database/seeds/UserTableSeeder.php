<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creando usuario para realizar perdido
        $data = array{
        	'name'     => 'Valeria Ahily',
        	'email'    => 'valeria.riodel@hotmail.com',
        	'password' => \Hash::make('holahola123'),
        	'rol'      => 'admin',

        }
    }
}
