@extends('admin')

@section('contenido')

<table class="table table-hover">
<thead>
	<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Categoria</th>
			<th>Marca</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Imagen</th>
			<th>Estado</th>
			<th>Opciones</th>	
		</th>
</thead>
	<tbody>
	@foreach($productos as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->nombre}}</td>
			<td>{{$p->categoria_id}}</td>
			<td>{{$p->marca_id}}</td>
			<td>{{$p->descripcion}}</td>
			<td>{{$p->precio}}</td>
			<td>{{$p->cantidad}}</td>
			<td>
			</td>
			<td>{{$p->estado}}</td>

			<td>	
				
				<a href="{{url('/editarProducto')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>	
				<a href="{{url('/eliminarProducto')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</a>

			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop