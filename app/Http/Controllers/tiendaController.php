<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class tiendaController extends Controller
{
	 public function registrarC(){
    	// $clientes=Cliente::all();
    	return view('registrarCliente');
    }

     public function guardar(Request $datos){
    	// $cliente = new Cliente();
    	// $cliente->nombre=$datos->input('nombre');
    	// $cliente->correo=$datos->input('correo');
    	// $cliente->fecha_nacimiento=$datos->input('fecha_nacimiento');
    	// $cliente->sexo=$datos->input('sexo');
    	// $cliente->ocupacion=$datos->input('ocupacion');
    	// $cliente->save();
     //    flash('Gracias por registrarte!') -> success();
     //    Mail::send('emails', ['cliente' => $cliente], function($message) use ($cliente){
     //            $message->from('agencontacto@gmail.com', 'Mazda México');
     //            $message->to($cliente->correo, $cliente->nombre)->subject('Gracias por registrarte ' . $cliente->nombre);
     //    });
    	// return redirect('/');

    }
}
