@extends('layout')

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
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/taz/salchiquesotaz.jpg" alt="">
									</a>
									<a href="#">
										<h4>SalchiQueso</h4>
									</a>
									<p class="price">Precio: $17.000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Añadir Al Carro</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/taz/chuzomixtaz.jpg" alt="">
									</a>
									<a href="#">
										<h4>Chuzo Mixto</h4>
									</a>
									<p class="price">Precio : $10.000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Añadir Al Carro</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/taz/costillastaz.jpg" alt="">
									</a>
									<a href="#">
										<h4>Costilla Ahumada</h4>
									</a>
									<p class="price">Precio : $10.000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Añadir Al Carro</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/taz/filetetaz.jpg" alt="">
									</a>
									<a href="#">
										<h4>Filete De Pollo</h4>
									</a>
									<p class="price">Precio : $10.000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Añadir Al Carro</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					            <div class="products">
									<a href="#">
										<img src="images/taz/maicitostaz.jpg" alt="">
									</a>
									<a href="#">
										<h4>Maicitos</h4>
									</a>
									<p class="price">Precio : $10.000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Añadir Al Carro</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <li>
					           <div class="products">
									<a href="#">
										<img src="images/taz/salchirancherataz.jpg" alt="">
									</a>
									<a href="#">
										<h4>SalchiRanchera</h4>
									</a>
									<p class="price">Precio : $10.000</p>
									<div >
										<a class="view-link shutter" href="#">
										<i class="fa fa-plus-circle"></i>Añadir Al Carro</a>
									</div>
								</div>	<!-- End of /.products -->
					        </li>
					        <!--  ... -->
					    </ul>
					</div>	<!-- End of /.products-grid -->

					<!-- Pagination -->

					<div class="pagination-bottom">
						<ul class="pagination">
						  	<li class="disabled"><a href="#">&laquo;</a></li>
						  	<li class="active"><a href="#">1 <span class="sr-only"></span></a></li>
						  	<li><a href="#">2</a></li>
						  	<li><a href="#">3</a></li>
						  	<li><a href="#">4</a></li>
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



						<div class="block">
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



						<div class="block">
							<h4>Tag</h4>
							<div class="tag-link">
								<a href="">CARNES</a>
								<a href="">ASADOS</a>
								<a href="">FRITOS</a>
								
							</div>	
						</div>
				</div>	<!-- End of /.col-md-3 -->
			
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


	


@endsection