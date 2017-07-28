<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Producto;
use App\Category;
use App\Marca;
use App\csv;
use Excel;
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

     public function registrarCategoria(){
      // $clientes=Cliente::all();
      return view('registrarCategoria');
    }

   public function guardarCat(Request $datos){
       $categoria = new Category();
        $categoria->nombre=$datos->input('nombre');
        $categoria->save();
        return redirect('/consultarCat');
   }

       public function eliminarCat($id){
         $categoria=Category::find($id);
         $categoria->delete();
         return redirect('/consultarCat');
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
         return redirect('/consultarCat');
   }  

   public function consultarCat(){
      $categorias = Category::all();
      return view('consultarCategorias', compact('categorias'));
   }
 
  public function master2(){
    $categorias = Category::all();
      return view('master2', compact('categorias'));
  }

  public function registrarMarca(){
      // $clientes=Cliente::all();
      return view('registrarMarca');
    }

   public function guardarMarca(Request $datos){
        $marca = new Marca();
        $marca->nombre=$datos->input('nombre');
        $marca->save();
        return redirect('/consultarMarcas');
   }

       public function eliminarMarca($id){
         $marca=Marca::find($id);
         $marca->delete();
         return redirect('/consultarMarcas');
   }

   public function editarMarca($id){
         //$proyecto=Proyecto::find($id);
         $marca=DB::table('marca')
         ->where('marca.id', '=', $id)
         ->first();
         return view('editarMarca', compact('marca'));
   }

      public function actualizarMarca($id, Request $datos){
         $marcas=Marca::find($id);
         $marcas->nombre=$datos->input('nombre');
         $marcas->save();
         return redirect('/consultarMarcas');
   }  

   public function consultarMarcas(){
      $marcas = Marca::all();
      return view('consultarMarcas', compact('marcas'));
   }

   public function catalogo(){
      // $clientes=Cliente::all();
     $tipo=Category::all();
        $marca=Marca::all();
      return view('catalogo', compact('tipo', 'marca'));
    }

   public function registrarP(){
        $categoria=Category::all();
        $marca=Marca::all();
        return view('registrarProductos', compact('categoria', 'marca'));
    }

   /*public function registrarP(){
      // $clientes=Cliente::all();
      return view('registrarProducto');
    }*/

    public function guardarP(Request $datos){
        $producto = new Producto();
        $producto->nombre=$datos->input('nombre');
        $producto->descripcion=$datos->input('descripcion');
        $producto->precio=$datos->input('precio');
        $producto->categoria_id=$datos->input('categoria');
        $producto->marca_id=$datos->input('marca');
        $producto->imagen=$datos->input('imagen');
        $producto->cantidad=$datos->input('cantidad');
        $producto->save();
        return redirect('/consultarProducto');
   }

       public function eliminarP($id){
         $producto=Producto::find($id);
         $producto->delete();
         return redirect('/consultarProducto');
   }

   public function editarP($id){
         $producto=DB::table('productos')
            ->where('productos.id', '=',$id)
            ->join('categorias', 'categorias.id', '=', 'productos.categoria_id')
            ->join('marca', 'marca.id', '=', 'productos.marca_id')
            ->select('productos.*', 'categorias.nombre', 'marca.nombre')
            ->first();
            $categoria=Category::all();
            $marca=Marca::all();
        return view('editarProducto', compact('producto', 'categoria', 'marca'));
   }

      public function actualizarP($id, Request $datos){
        $producto=Producto::find($id);
        $producto->nombre=$datos->input('nombre');
        $producto->descripcion=$datos->input('descripcion');
        $producto->categoria_id=$datos->input('categoria');
        $producto->marca_id=$datos->input('marca');
        $producto->cantidad=$datos->input('cantidad');
        $producto->precio=$datos->input('precio');
        $producto->imagen=$datos->input('imagen');
        

        $producto->save();
         return redirect('/consultarProducto');
   }

   public function consultarP(){
      $productos = Producto::all();
      return view('inventarioProductos', compact('productos'));
   }

  public function redirectTo(){
        if(auth()->user()->rol==1){
            return view('/admin');
        }
        else{
            return view('/master');
        }
    }

     public function csv(){
      // $clientes=Cliente::all();
      return view('csv');
    }

  public function downloadExcel(Request $request, $type)
  {
    $data = csv::get()->toArray();
    return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
      $excel->sheet('mySheet', function($sheet) use ($data)
          {
        $sheet->fromArray($data);
          });
    })->download($type);
  }

  public function importExcel(Request $request)
  {

    if($request->hasFile('import_file')){
      $path = $request->file('import_file')->getRealPath();

      $data = Excel::load($path, function($reader) {})->get();

      if(!empty($data) && $data->count()){

        foreach ($data->toArray() as $key => $value) {
          if(!empty($value)){
            foreach ($value as $v) {    
              $insert[] = ['categoria' => $v['categoria'], 'marca' => $v['marca'], 'nombre' => $v['nombre'], 'descripcion' => $v['descripcion'], 'precio' => $v['precio'], 'estado' => $v['estado'], 'cantidad' => $v['cantidad']];
            }
          }
        }

        
        if(!empty($insert)){
          csv::insert($insert);
          return back()->with('success','Insert Record successfully.');
        }

      }

    }

    return back()->with('error','Please Check your file, Something is wrong there.');
  }
}
