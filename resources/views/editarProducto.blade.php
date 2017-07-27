	
@extends('master')

@section('contenido')
<form action="{{url('/')}}/{{$->}}" method="POST">

    <div class="form-group">
        <label for="id_categoria">Categoría:</label>
        <select name="id_categoria" class="form-control">
            <option value="1">1</option>
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
		<button type="submit" class="btn btn-info">Actualizar</button>
		<a href="{{url('/consultarRecursos')}}" class="btn btn-primary">Cancelar</a>
	</div>
</form>