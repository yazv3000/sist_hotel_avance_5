<?php
include('db.php');	 // Conexión a la base de datos
?>
<!DOCTYPE html>
<html lang="es-PE">
<head>
<title>Hotel Viñas Queirolo</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />

<link rel="shortcut icon" type="image/png" href="images/flaticon.png">

<script type="application/x-javascript"> 
	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

	function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<!-- //for-mobile-apps -->

<!-- Estilos -->
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.css"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link rel='stylesheet' href="css/easy-responsive-tabs.css"  type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<!-- fuentes -->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fuentes-->

</head>

<body>
	<!-- header -->
	<div class="banner-top">
		<div class="social-bnr-agileits">
			<ul class="social-icons3">
				<li><a href="https://www.facebook.com/HotelVinasQueirolo/" class="fa fa-facebook icon-border facebook" target="_blank"> </a></li>
				<li><a href="https://www.instagram.com/hotelvinasqueirolo/" class="fa fa-instagram icon-border instagram" target="_blank"> </a></li>
				<li><a href="https://www.tripadvisor.com.pe/Hotel_Review-g304040-d2525632-Reviews-Hotel_Vinas_Queirolo-Ica_Ica_Region.html" class="fa fa-tripadvisor icon-border tripadvisor" target="_blank"> </a></li>
				<li><a href="https://www.youtube.com/channel/UCFeDSWc31Zys_jWlPzd76Bw" class="fa fa-youtube icon-border youtube" target="_blank"> </a></li> 
			</ul>
		</div>
		<div class="contact-bnr-w3-agile">
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:reservas@hotelvinasqueirolo.com">reservas@hotelvinasqueirolo.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>Ica: (+511) 965397086</li>	
				<li class="s-bar">
					<div class="search">
						<input class="search_box" type="checkbox" id="search_box">
						<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
						<div class="search_form">
							<form action="#" method="post">
								<input type="search" name="Search" placeholder=" " required=" " />
								<input type="submit" value="Search">
							</form>
						</div>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
	
		<div class="w3_navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img src="images/logo.png" height="100%" alt="">
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--iris">
							<ul class="nav navbar-nav menu__list">
								<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Hotel</a></li>
								<li class="menu__item"><a href="#about" class="menu__link scroll">Acerca de</a></li>
								<li class="menu__item"><a href="#gallery" class="menu__link scroll">Galería</a></li>
								<li class="menu__item"><a href="#rooms" class="menu__link scroll">Habitaciones</a></li>
								<li class="menu__item"><a href="#contact" class="menu__link scroll">Contactar</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
		</div>

	</div>
	<!-- //header -->

	<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h4>Hotel Viñas<br>Queirolo</h4>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Leer más</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>Hotel Viñas<br>Queirolo</h4>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Leer más</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>Hotel Viñas<br>Queirolo</h4>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Leer más</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			
		</div>
		<!--banner Slider starts Here-->
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>	
	<!-- //banner --> 

	<!-- Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
					<h4>SOL<span>SUBIR</span></h4>
					
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<h5>Sabemos lo que amas</h5>
					<p>Ofrecer a los huéspedes vistas únicas y encantadoras desde sus habitaciones con sus comodidades excepcionales, hace que Star Hotel sea uno de los mejores en su tipo. Pruebe nuestro menú de comida, servicios increíbles y un personal amable mientras esté aquí..</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->

	<div id="availability-agileits">
		<div class="col-md-12 book-form-left-w3layouts">
			<a href="admin/reservation.php">
				<h2><marquee scrollamount="15">¡Reserva ahora tu habitación en el mejor hotel de Ica!</marquee></h2>
			</a>
		</div>

		<div class="clearfix"> </div>
	</div>

	<!-- about -->
	<div class="about-wthree" id="about">
		<div class="container">
			<div class="ab-w3l-spa">
                <h3 class="title-w3-agileits title-black-wthree">Acerca de</h3> 
				
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
					<p class="about-para-w3ls"> 
						El Hotel Viñas Queirolo se encuentra ubicado en el valle de Ica, al pie de los primeros contrafuertes de la Cordillera de los Andes, 
						rodeado por más de 500 hectáreas de viñedos donde se cultivan las vides con que se elaboran los vinos
						Intipalka de la Bodega Santiago Queirolo.	
					</p>
					</div>
				</div>

				<img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
				
				<div class="w3l-slider-img">
					<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
				</div>
                
				<div class="w3ls-info-about">
					<h4>Te encantarán todas las comodidades que ofrecemos!</h4>
					<p>que espero disfruta de tus vaciones con nosotros. </p>
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
 	<!-- //about -->


	<!-- servicios -->
	<div class="servicios">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3>
					<span>Experimenta una buena estadía</span> 
				</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">HABITACIONES</h4>
							<span class="cbp-ig-category">Adaptadas a sus necesidades</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">VIÑEDOS</h4>
							<span class="cbp-ig-category">Disfruta de un paisaje único</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_bar"></span>
							<h4 class="cbp-ig-title">BARES</h4>
							<span class="cbp-ig-category">Variedad de cocteles selectos</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">EVENTOS</h4>
							<span class="cbp-ig-category">Celebra bodas, aniversarios, etc.</span>
						</div>
					</li>
				</ul>
			</div>

			<div class="clearfix"></div>

		</div>
	</div>
	<!-- //servicios -->

	<!-- Galería -->
	<section class="portfolio-w3ls" id="gallery">
		
		<h3 class="title-w3-agileits title-black-wthree">Galería</h3>
		
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
				<div class="textbox">

					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g7.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g8.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g11.jpg" class="swipebox"><img src="images/g11.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
	
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g12.jpg" class="swipebox"><img src="images/g12.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="clearfix"> </div>
	</section>
	<!-- //galería -->

	<!-- rooms & rates -->
    <div class="plans-section" id="rooms">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Habitaciones y tarifas</h3>
			
			<div class="priceing-table-main">
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Habitación Suite</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>

							<div class="price-selet">	
								<h3><span>$</span>320</h3>						
								<a href="admin/reservation.php" >Reservar ahora</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Habitación Superior</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span>220</h3>
								<a href="admin/reservation.php" >Reservar ahora</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Habitación Junior</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span>180</h3>
								<a href="admin/reservation.php" >Reservar ahora</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Hab. Individual</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span> 150</h3>
								<a href="admin/reservation.php" >Reservar ahora</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>

			</div>
		</div>
	</div>
	<!--// rooms & rates -->

    <!-- visitors -->
	<div class="w3l-visitors-agile" >
		<div class="container">
            <h3 class="title-w3-agileits title-black-wthree">Testimonio de visitantes</h3> 
		</div>

		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									Precioso
								</h4>
								<p>Rodeado de viñedos se encuentra este maravilloso hotel con todo tipo de comodidades. Muy bonito, limpio y con muy buena atención.
								</p>
								<h5>Dayi Dominguez</h5>
								<p>Santiago de Chile</p>
							</div>
							<div class="clearfix"> </div>
						</li>

						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Vale la pena volver
								</h4>
								<p>El lugar es fantástico, lo que más puedo valorar es el restaurante sus comidas son una delicia.
									Tiene una muy buena vista hacia los viñedos la cual es espectacular</p>
								<h5>Jahnatan Song</h5>
								<p>Corea del Sur</p>
							</div>
							<div class="clearfix"> </div>
						</li>

						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Excepcional
								</h4>
								<p>Supero completamente mis expectativas, me gusto la diversidad de actividades la visita al mirador, las catas,
									la comida muy buena, las habitaciones muy cómodas. Muy buena atencion en todos los ambientes.</p>
								<h5>Julia Rose</h5>
								<p>Lima</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  	<!-- visitors -->

	<!-- contact -->
	<section class="contact-w3ls" id="contact">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
				<div class="contact-agileits">
					<h4>Contáctenos</h4>
					<p class="contact-agile2">Inscribíte a nuestros boletines</p>
					
					<form method="post" name="sentMessage" id="contactForm" >
						<div class="control-group form-group">
							<label class="contact-p1">Nombre completo:</label>
							<input type="text" class="form-control" name="name" id="name" required >

							<p class="help-block"></p>
						</div>

						<div class="control-group form-group">
							<label class="contact-p1">Número de teléfono:</label>
							<input type="tel" class="form-control" name="phone" id="phone" required >
							
							<p class="help-block"></p>
						</div>

						<div class="control-group form-group">
							<label class="contact-p1">Dirección de correo electrónico:</label>
							<input type="email" class="form-control" name="email" id="email" required >
							
							<p class="help-block"></p>
						</div>
						
						<input type="submit" name="sub" value="Enviar" class="btn btn-primary">	
					</form>

					<?php
						if(isset($_POST['sub'])){

							$name = $_POST['name'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$approval = "Sin permitir";
							$sql = "INSERT INTO `contacto`(`nombre_completo`, `nro_telefono`, `email`,`fecha_contacto`,`approval`) 
									VALUES 					('$name',			'$phone',	'$email',		now(),	 '$approval')" ;
							
							if(mysqli_query($con,$sql))
							echo"OK";
						}
					?>
				</div>
			</div>
		
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
				<h4></h4>
				<p class="contact-agile1"><strong>Teléfono: </strong>(+511) 9653970868</p>
				<p class="contact-agile1"><strong>Email: </strong> <a href="mailto:reservas@hotelvinasqueirolo.com">reservas@hotelvinasqueirolo.com</a></p>
				<p class="contact-agile1"><strong>Dirección: </strong>Carretera San José de los Molinos Km 11, Los Molinos, Ica - Perú</p>
																	
				<div class="social-bnr-agileits footer-icons-agileinfo">
					<ul class="social-icons3">
						<li><a href="https://www.facebook.com/HotelVinasQueirolo/" class="fa fa-facebook icon-border facebook" target="_blank"> </a></li>
						<li><a href="https://www.instagram.com/hotelvinasqueirolo/" class="fa fa-instagram icon-border instagram" target="_blank"> </a></li>
						<li><a href="https://www.tripadvisor.com.pe/Hotel_Review-g304040-d2525632-Reviews-Hotel_Vinas_Queirolo-Ica_Ica_Region.html" class="fa fa-tripadvisor icon-border tripadvisor" target="_blank"> </a></li>
						<li><a href="https://www.youtube.com/channel/UCFeDSWc31Zys_jWlPzd76Bw" class="fa fa-youtube icon-border youtube" target="_blank"> </a></li> 
					</ul>
				</div>
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Carretera%20San%20Jos%C3%A9%20de%20los%20Molinos%20Km%2011,%20Los%20Molinos,%20Ica%20-%20Per%C3%BA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
			
			</div>

			<div class="clearfix"></div>
		</div>
	</section>
	<!-- /contact -->

	<!-- footer -->
	<div class="copy">
		<p>&copy;  <a href="index.php">Hotel Viñas Queirolo</a> </p>
	</div>
	<!--/footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	
	<!-- contact form -->
	<script src="js/jqBootstrapValidation.js"></script>
	<!-- /contact form -->

	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	
	<script>
		$(function() {
			$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- gallery popup -->
	<link rel="stylesheet" href="css/swipebox.css">
	
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!--//start-smoth-scrolling -->

	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->

	<script src="js/responsiveslides.min.js"></script>
	<script>
		// También se puede usar "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider4").responsiveSlides({
					auto: true,
					pager:true,
					nav:false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
						
			});
	</script>
	
	<!--search-bar-->
	<script src="js/main.js"></script>	
	<!--//search-bar-->

	<!--tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--//tabs-->
	
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			}; */								
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<!-- Volver a la parte superior-->
	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!-- //smooth scrolling -->

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


