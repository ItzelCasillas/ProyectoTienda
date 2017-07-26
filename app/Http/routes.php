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

Route::post('/guardarCliente', 'tiendaController@guardar');

Route::get('/vistaAdmin', 'tiendaController@vistaAdmin');


Route::get('/admin', function (){
	echo "master";
})->middleware('auth');


Route::get('/altaCategoria', 'tiendaController@registrarCategoria');
Route::post('/guardarCat', 'tiendaController@guardarCat');
Route::get('/consultarCat', 'tiendaController@consultarCat');
Route::get('/eliminarCat/{id}', 'tiendaController@eliminarCat');
Route::get('/editarCat/{id}', 'tiendaController@editarCat');
Route::post('/actualizarCat/{id}', 'tiendaController@actualizarCat');
// Route::get('/master2', 'tiendaController@master2');



Route::get('/master', 'HomeController@index')->name('master');
Route::get('/altaProductos', 'tiendaController@registrarP');
Route::post('/guardarProducto', 'tiendaController@guardarP');
Route::get('/consultarProducto', 'tiendaController@consultarP');

Route::get('/home', 'HomeController@index');

Route::auth();
Route::post('/login', 'tiendaController@redirectTo');