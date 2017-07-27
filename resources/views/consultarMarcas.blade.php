@extends('admin')

@section('contenido')
<br>
<br>
<div class="form-group">
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
		</tr>
	</thead>
	<tbody>
	@foreach($marcas as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->nombre}}</td>
			<td>
				<a href="{{url('/editarMarca')}}/{{$c->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden=true></span>
				</a>
				<a href="{{url('/eliminarMarca')}}/{{$c->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-trash" aria-hidden=true></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop