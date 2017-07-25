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
        //Creando usuario para realizar pedidos y administrar
        $data = array(
	        [
				'name'       => 'Valeria Ahily',
	        	'email'      => 'valeria.riodel@hotmail.com',
	        	'password'   => \Hash::make('holahola123'),
	        	'rol'        => 'admin',
	        	'address'    => 'Infiernillo 666, Satanas',
	        	'created_at' => new DateTime,
	        	'updated_at' => new DateTime
	        ],

	        [
	        	'name'       => 'Itzel Casillas',
	        	'email'      => '1tz3lcg@gmail.com',
	        	'password'   => \Hash::make('holahola123'),
	        	'rol'        => 'user',
	        	'address'    => 'Whataverygoodsoup, Tinguilingui',
	        	'created_at' => new DateTime,
	        	'updated_at' => new DateTime
	        ],
        );
       	User::insert($data);
    }
}
