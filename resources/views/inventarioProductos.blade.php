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
	@foreach($producto as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->nombre}}</td>
			<td>{{$p->categoria_id}}</td>
			<td>{{$p->marca_id}}</td>
			<td>{{$p->descripcion}}</td>
			<td>{{$p->precio}}</td>
			<td>{{$p->cantidad}}</td>
			<td><!-- Button trigger modal 
				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  					Launch demo modal
				</button>-->
			</td>
			<td>{{$p->estado}}</td>
			<td>
				<a href="{{url('/editarProducto')}}/{{$p->id}}" class="btn btn-xs btn-info">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarP')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
			<!--<td><img src="{{url($p->imagen)}}"></td>-->
		</tr>
	@endforeach
	</tbody>
</table>

<!--<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

@stop

<!--@section('script')
<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
@stop-->