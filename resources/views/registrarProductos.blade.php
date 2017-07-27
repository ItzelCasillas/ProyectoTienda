@extends('admin')

@section('contenido')
<form action="{{url('/guardarProducto')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <input type="text" class="form-control" name="descripcion" required>
    </div>
    <div class="form-group" >
        <label for="categoria">Categoria:</label>
        <select name="categoria" class="form-control" id="selectFiltro">
            <option value="%" disabled="" selected="">Seleccione Categoria</option>
            @foreach($categoria as $c)
                <option value="{{$c->id}}">{{$c->nombre}}</option>
            @endforeach  
        </select>
    </div>
        <!--<div class="form-group" >
        <label for="marca">Marca:</label>
        <select name="marca" class="form-control" id="selectFiltro">
            <option value="%" disabled="" selected="">Seleccione Marca</option>
            @foreach($marca as $m)
                <option value="{{$m->id}}">{{$m->nombre}}</option>
            @endforeach  
        </select>
    </div>-->
    <div class="form-group">
        <label for="cantidad">Cantidad:</label>
        <input type="number" class="form-control" name="cantidad" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" name="precio" required>
    </div>
    <div class="form-group">
        <label for="imagen">Imagen:</label>
        <input type="text" class="form-control" name="imagen" required>
    </div>

    <div>
        <button type:"submit" class="btn btn-primary">Guardar producto</button>
        <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>

@stop