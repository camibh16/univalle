@extends('web.taz.layout')

@section('content')


<section id="shop">
		<div class="container">
			<div class="row">

				<div class="col-md-9">

					<div class="products-heading">
						<h2>PRODUCTOS</h2>
					</div>	<!-- End of /.Products-heading -->
					<div class="product-grid">
					    <ul>
							@foreach($empresas->productos as $producto)
					        	<li>
					            	<div class="products">
										{{-- <a href="comprar/{{$producto->id}}"> --}}
											<img width="280px" height="200px" src="{{$producto->imagen}}" alt="">
										{{-- </a> --}}
										<a href="#">
											<h4>{{$producto->nombre}}</h4>
										</a>										
										<p class="price">Precio: {{$producto->precio}} {{-- - {!! Auth::user()->id !!} --}}</p>

										<div >
											{{-- @foreach($estados as $estado) --}}
											{!! Form::open([
												'url' => '/comprar',
												'method' => 'POST'
											])											
										!!}
											
											<input type="hidden" name="producto_id" value="{!! Auth::user()->id !!}">
											<input type="hidden" name="producto_id" value="{{$producto->id}}">
											{{-- <input type="hidden" name="estado_id" value="1"> --}}
											<input type="submit" value="Pedir" class="btn btn-info">

											{{-- <a class="view-link shutter" href="comprar/{{$producto->id}}"> --}}
											{{-- <i class="fa fa-money"></i>Pedir</a> --}}
											{!! Form::close() !!}
											{{-- @endforeach --}}
										</div>
									</div>	<!-- End of /.products -->
					        	</li>
							@endforeach		      
					    </ul>
					</div>	<!-- End of /.products-grid -->
					
					<!-- Pagination -->

					<div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	{{-- <li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li> --}}
						  	<li><a href="#">»</a></li>
						</ul>	<!-- End of /.pagination -->
					</div>
				</div>	<!-- End of /.col-md-9 -->
				<div class="col-md-3">
					<div class="blog-sidebar">
						<div class="block">


							<h4>Categorias</h4>
							<div class="list-group">


								<a href="#" class="list-group-item">
									<i class="fa  fa-dot-circle-o"></i>
									Comida Rapida
								</a>

								
								</a>
							</div>
						</div>



						<div class="block">
							<img src="images/p/dis.png" alt="">
						</div>



						{{-- <div class="block">
							<h4>Nuevas Delicias</h4>
							<ul class="media-list">
							 	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/taz/maicitostaz.jpg" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">Maicitos
							      		<p>Lorem ipsum dolor sit amet.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/taz/salchiquesotaz.jpg" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading"> SalchiQueso
							      		<p>Lorem ipsum dolor.</p></a>
							    	</div>
							  	</li>
							  	<li class="media">
							    	<a class="pull-left" href="#">
							      		<img class="media-object" src="images/taz/salchirancherataz.jpg" alt="...">
							    	</a>
							    	<div class="media-body">
							      		<a href="" class="media-heading">
							      		SalchiRanchera
							      		<p>Lorem ipsum dolor sit.</p>

							      		</a>
							    	</div>
							  	</li>
							  </ul>
						</div>
 --}}


						{{-- <div class="block">
							<h4>Tag</h4>
							<div class="tag-link">
								<a href="">CARNES</a>
								<a href="">ASADOS</a>
								<a href="">FRITOS</a>
								
							</div>	
						</div> --}}



				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


	


@endsection