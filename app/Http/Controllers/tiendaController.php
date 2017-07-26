<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use App\Category;
use DB;

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

     public function registrarCategoria(){
      // $clientes=Cliente::all();
      return view('registrarCategoria');
    }

   public function guardarCat(Request $datos){
       $categoria = new Category();
        $categoria->nombre=$datos->input('nombre');
        $categoria->save();
        return redirect('/admin');
   }

       public function eliminarCat($id){
         $categoria=Category::find($id);
         $categoria->delete();
         return redirect('/admin');
   }

   public function editarCat($id){
         //$proyecto=Proyecto::find($id);
         $categoria=DB::table('categorias')
         ->where('categorias.id', '=', $id)
         ->first();
         return view('editarCategoria', compact('categoria'));
   }

      public function actualizarCat($id, Request $datos){
         $categorias=Category::find($id);
         $categorias->nombre=$datos->input('nombre');
         $categorias->save();
         return redirect('/admin');
   }  

   public function consultarCat(){
      $categorias = Category::all();
      return view('consultarCategorias', compact('categorias'));
   }
 
  // public function master2{
  //   $categorias = Category::all();
  //     return view('master2', compact('categorias'));
  // }

   public function registrarP(){
        $categoria=Category::all();
        return view('registrarProductos', compact('categoria'));
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

  public function redirectTo(){
        if(auth()->user()->rol==1){
            return view('/admin');
        }
        else{
            return view('/master');
        }
    }
}
