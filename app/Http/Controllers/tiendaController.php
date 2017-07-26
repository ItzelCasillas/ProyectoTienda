<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;

class tiendaController extends Controller
{
	 public function registrarC(){
    	// $clientes=Cliente::all();
    	return view('registrarCliente');
    }

    public function inicioSesion(){
        return view('inicioSesion');
    }

    public function vistaAdmin(){
      // $clientes=Cliente::all();
      return view('admin');
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
   public function registrarCat(){
        $categories=Category::all();
        return view('registrarCat', compact('categories'));
   }

   public function guardarCat(Request $datos){
       $categories = new Category();
         $categories->nombre=$datos->input('name');
        $categories->save();
        return redirect('/consultarCat');
   }

       public function eliminarCat($id){
         $categories=Category::find($id);
         $categories->delete();
         return redirect('/consultarCat');
   }

   public function editarCat($id){
         //$proyecto=Proyecto::find($id);
         $categories=DB::table('categories')
         ->where('categories.id', '=', $id)
         ->first();
         $categorie=Category::all();
         return view('editarCat', compact('categories', 'categorie'));
   }

      public function actualizarCat($id, Request $datos){
         $categories=Category::find($id);
         $categories->name=$datos->input('name');
         $categories->save();
         return redirect('/consultarCat');
   }

   public function registrarP(){
        return view('registrarProductos');
    }

    public function guardarP(Request $datos){
        $nuevo = new Producto();
        $nuevo->nombre=$datos->input('nombre');
        $nuevo->descripcion=$datos->input('descripcion');
        $nuevo->cantidad=$datos->input('cantidad');
        $nuevo->precio=$datos->input('precio');
        $nuevo->categoria_id=$datos->input('id_categoria');
        $nuevo->imagen=$datos->input('imagen');
        $nuevo->save();
        return redirect('/consultarProducto');
   }

   public function consultarP(){
      $productos = Producto::all();
      return view('inventarioProductos', compact('productos'))  ;
   }

}
