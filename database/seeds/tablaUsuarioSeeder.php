<?php

use Illuminate\Database\Seeder;
use App\User;
class tablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
			[
				'name' 		=> 'Javier', 
				'email' 	=> 'cebolla@gmail.com',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Raquel', 
				'last_name' => 'Torres', 
				'email' 	=> 'requel@correo.com', 
				'user' 		=> 'prueba2',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Tonala 321, Jalisco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($users);
    }
}
