<!doctype html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>UNIVALLE</title>
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
			<link rel="stylesheet" href="/css/nivo-slider.css" type="text/css" />
			<link rel="stylesheet" href="/css/owl.carousel.css">
			<link rel="stylesheet" href="/css/owl.theme.css">
			<link rel="stylesheet" href="/css/bootstrap.min.css">
			<link rel="stylesheet" href="/css/font-awesome.min.css">
			<link rel="stylesheet" href="/css/style.css">
			<link rel="stylesheet" href="/css/responsive.css">

	<!-- jS -->
			<script src="/js/jquery.min.js" type="text/javascript"></script>
			<script src="/js/bootstrap.min.js" type="text/javascript"></script>
			<script src="/js/jquery.nivo.slider.js" type="text/javascript"></script>
			<script src="/js/owl.carousel.min.js" type="text/javascript"></script>
			<script src="/js/jquery.nicescroll.js"></script>
			<script src="/js/jquery.scrollUp.min.js"></script>
			<script src="/js/main.js" type="text/javascript"></script>


		</head>
	<body>

		<nav class="navbar navbar-default">
			<div class="container">
		  	    <div class="navbar-header">
		     	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		      	 	 <span class="sr-only">Toggle navigation</span>
		       		 <span class="icon-bar"></span>
		       		 <span class="icon-bar"></span>
		        	 <span class="icon-bar"></span>
		      	 </button>
		    	</div> <!-- End of /.navbar-header -->

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav nav-main">
		        	<li class="active"><a href="/">INICIO</a></li>
					<!--<li><a href="products.html">SHOP</a></li>-->
					{{-- <li><a href="blog.html">BLOG</a></li> --}}
					{{-- <li>
							<div class="cart dropdown">
						  		<a data-toggle="dropdown" href="#">
						  		Carrito
						  		<span class="circle-shopping-cart">
						  			{{$carrito->ProductosSize}}
						  		</span>
						  	    </a>
					  			<div class="dropdown-menu dropup">
					  				<span class="caret"></span>
						  			<ul class="media-list">
								  		<li class="media">
										    <img class="pull-left" src="images/product-item.jpg" alt="">
										    <div class="media-body">
										      	<h6>Italian Sauce
								    				<span>$250</span>
								    			</h6>
								    		</div>
								  		</li>
									</ul>
									<button class="btn btn-primary btn-sm">Checkout</button>
							    </div>
							</div>
					</li> --}}

					<li class="dropdown">
						<a href="#">
							{!! Auth::user()->name !!}
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						   <li>
						   		<a href="{!! url('/logout') !!}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        cerrar sesion
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
						   	

						   </li>
						    <li><a  href="#">Perfil</a></li>
						    
						</ul>
					</li> <!-- End of /.dropdown -->
					<li>
					
                                    
                                

					</li>
					
		        </ul> <!-- End of /.nav-main -->
		    </div>	<!-- /.navbar-collapse -->
			</div>	<!-- /.container-fluid -->
		</nav>	<!-- End of /.nav -->



@yield('content')



<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="block clearfix">
						<a href="{{url('/')}}">
							<img src="/images/footer-logo.png" class="text-center" alt="">
						</a>
						<p>
							DOMICILIOS BUENAVENTURA
						</p>
						{{-- <h4 class="connect-heading">CONNECT WITH US</h4> --}}
						{{-- <ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon --> --}}
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				{{-- <div class="col-md-4 text-center">
					<div class="block">
						<h4>CONTACTANOS</h4>
						<p ><i class="fa fa-map-marker"></i> <span>Univalle</span></p>
						<p> <i class="fa fa-phone"></i> <span>Telefono:</span> (+57) 320 657 7796 </p>

						<p> <i class="fa fa-mobile"></i> <span>Mobile:</span> (+386) 40 654 123 651</p>
 
						<p class="mail"><i class="fa  fa-envelope"></i>Email: <span>camibh16@gmail.com</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 --> --}}
				{{-- <div class="col-md-4">
					<div class="block">
						<h4>UPCOMING ITEMS</h4>
						<div class="media">
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="/images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="/images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="/images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="/images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="/images/product-item.jpg" alt="...">
						  	</a>
						  	<a class="pull-left" href="#">
						    	<img class="media-object" src="/images/product-item.jpg" alt="...">
						  	</a>
						</div>	<!-- End Of /.media -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 --> --}}
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->
		


	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						{{-- <ul class="cash-out pull-left">
							<li>
								<a href="#">
									<img src="/images/American-Express.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/images/PayPal.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/images/Maestro.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/images/Visa.png" alt="">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="/images/Visa-Electron.png" alt="">	
								</a>
							</li>
						</ul> --}}
						<p class="copyright-text {{-- pull-center --}}">Food Code @2013 Designed by <a href="http://www.themexpert.com">Themexpert</a> All Rights Reserved</p>
					</div>	<!-- End Of /.col-md-12 -->	
				</div>	<!-- End Of /.row -->	
			</div>	<!-- End Of /.container -->	
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->

	</body>
</html>