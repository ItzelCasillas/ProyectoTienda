@extends('admin')

@section('contenido')

  <br>
<!--tags -->

<form action="{{url('/actualizarCat')}}/{{$categoria->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" name="nombre" required value="{{$categoria->nombre}}">
	</div>
	<div> <br>
		<button type:"submit" class="btn btn-primary" id="btnRegistrar">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger" id="btnCancelar">Cancelar</a>
	</div>
</form>
@stop