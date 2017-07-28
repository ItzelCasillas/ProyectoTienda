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
<br>
<br>
<br>
        <div>
        	@foreach($productos as $p)
		<!-- <h3>{{$p->nombre}}</h3>
		<img src="imagenes/4.jpg" width='250'> -->
		<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
									<a href="{{url('/single')}}/{{$p->id}}">
										<img src="imagenes/4.jpg" alt="" class="pro-image-front">
										<img src="imagenes/4.jpg" alt="" class="pro-image-back">
										</a>
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<!-- <a href="single.html" class="link-product-add-cart">Vista rápida</a> -->
												</div>
											</div>
											<span class="product-new-top">Vista rápida</span>
											
									</div>
									<div class="item-info-product ">
										<h4>{{$p->nombre}}</h4>
										<div class="info-product-price">
											<span class="item_price">${{$p->precio}}</span>

											<!-- <del>$69.71</del> -->
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Formal Blue Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add to cart" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
			@endforeach
        </div>
</form>

@stop