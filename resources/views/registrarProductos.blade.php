@extends('master2')

@section('contenido')
<form action="{{url('/')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token() }}">
    <div class="form-group">
        <label for="id_categoria">Categoría:</label>
        <select name="puesto_id" class="form-control">
            @foreach($categorias as $c)
                <option value="{{$c->id}}">{{$c->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion:</label>
        <input type="text" class="form-control" name="descripcion" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" class="form-control" name="precio" required>
    </div>
    <div class="form-group">
        <label for="precio">Imagen:</label>
        <input type="number" class="form-control" name="precio" required>
    </div>

    <div>
        <button type:"submit" class="btn btn-primary">Guardar producto</button>
        <a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
    </div>
</form>

@stop