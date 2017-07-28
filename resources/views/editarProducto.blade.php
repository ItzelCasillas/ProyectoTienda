@extends('admin')

@section('contenido')

<form action="{{url('/actualizarProducto')}}/{{$producto->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required value="{{$producto->nombre}}">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <input type="text" class="form-control" name="descripcion" required value="{{$producto->descripcion}}">
    </div>
    <div class="form-group" >
        <label for="categoria">Categoria:</label>
        <select name="categoria" class="form-control" id="selectFiltro">
<<<<<<< HEAD
            <option value="%" disabled="" selected value="">Seleccione Categoria</option>
=======
        <option selected value="{{$producto->categoria_id}}">{{$producto->nombre}}</option>
>>>>>>> b0224a927c07b5a8c9c8c64f7b96661812ae71f7
            @foreach($categoria as $c)
                <option value="{{$c->id}}">{{$c->nombre}}</option>
            @endforeach  
        </select>
    </div>
    <div class="form-group">
        <label for="marca">Marca:</label>
        <select name="marca" class="form-control" id="selectFiltro">
            <option selected value="{{$producto->marca_id}}">{{$producto->nombre}}</option>
            @foreach($marca as $m)
                <option value="{{$m->id}}">{{$m->nombre}}</option>
            @endforeach  
        </select>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="number" class="form-control" name="cantidad" required value="{{$producto->cantidad}}">
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" name="precio" required value="{{$producto->precio}}">
    </div>
    <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input type="text" class="form-control" name="imagen" required value="{{$producto->imagen}}">
    </div>

    <div>
        <button type:"submit" class="btn btn-primary" id="btnRegistrar">Actualizar</button>
        <a href="{{url('/')}}" class="btn btn-danger" id="btnCancelar">Cancelar</a>
    </div>
</form>
@stop