@extends('master2')

@section('contenido')
<form action="" class="navbar-form navbar-left" role="search" method="POST">
	<input id ="token" type="hidden" name="_token" value="{{csrf_token() }}">
	<label for="nombre">Filtro</label> <br>
	 <div  id="select1">
                   <select name="tipo" class="form-control">
		<option value="%" disabled="" selected="">Seleccione tipo</option>
		@foreach($tipo as $t)

				<option value="{{$t->id}}">{{$t->nombre}}</option>
			@endforeach
	</select>
        </div>

        <div  id="select2">
                   <select name="marca" class="form-control">
		<option value="%" disabled="" selected="">Seleccione marca</option>
		@foreach($marca as $m)

				<option value="{{$m->id}}">{{$m->nombre}}</option>
			@endforeach
	</select>
        </div>
        <button type="submit" class="btn btn-default" id="btnBuscar">Buscar</button>
</form>
@stop