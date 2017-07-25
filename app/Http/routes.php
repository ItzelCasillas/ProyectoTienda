<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/registrarCliente', 'tiendaController@registrarC');
Route::get('/inicioSesion', 'tiendaController@inicioSesion');

Route::get('/admin', function (){
	echo "master";
})->middleware('auth');


Route::post('/guardarCliente', 'tiendaController@guardar');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
