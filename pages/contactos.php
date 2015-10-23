<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>ITDECSA - Informatic Technology Development Corporation S.A. </title>
  <style type="text/css">
            /* Set a size for our map container, the Google Map will take up 100% of this container */
            #map { 
                width: 500px;
                height: 300px;
            }
        </style>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cultivation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->
<link rel="stylesheet" href="../css/swipebox.css">
			<script src="../js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
				<!--Animation-->
<script src="../js/wow.min.js"></script>
<link href="../css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<!---/End-Animation---->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

				
        
       			 <script type="text/javascript">
            	  // When the window has finished loading create our google map below
           			 google.maps.event.addDomListener(window, 'load', init);
        
            		function init() {
            	    // Basic options for a simple Google Map
            	    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            	    //marcador con la ubicación de la Universidad
				

                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 18,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-13.522413, -71.962290), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles:[{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-13.522500, -71.962926),
                    map: map,
                    title: 'Snazzy!'

                     });

                var popup = new google.maps.InfoWindow({
  			    content: 'ITDECSA'});
   			    popup.open(map, marker);  

   			    //Imagen a mostrar con su ruta
				/*var image = new google.maps.MarkerImage(
     		   '../images/fachada.jpg'
      			, new google.maps.Size(300,300));*/

      			//Marcador con la imagen anterior como icono
				var place = new google.maps.LatLng(-13.522421, -71.962623);
				var marker = new google.maps.Marker({
     			   position: place
     	           , map: map
     			   , title: 'Cayo Los Pajaros, un clic para ver a tamaño completo'
                   , icon: image
                   , animation: google.maps.Animation.DROP,});
        
            }
        </script>

        <!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3OU3AV4FqT8DIgIfcN0DBfkbqk96DpTr";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
</head>
<body style="background-color:#000000;" >
    <div class="header1 head-top " id="home">
		<div class="container">
			<div class="header-top">

				<div class="top-menu">
					<span class="menu">
						<img src="../images/nav1.png" alt=""/>
					</span>

				    <ul>
					   	<li><a href="../index.php">Inicio</a></li><label>/</label>
					    <li><a href="quienessomos.php">Quienes Somos</a></li><label>/</label>
					  	<li><a href="servicios.php">Servicios</a></li><label>/</label>
						<li><a href="productos.php">Productos</a></li><label>/</label>   	
					   	<li><a href="contactos.php" class="active">Contactos</a></li>
				    </ul>
     				<!-- script for menu -->
				
					 <script>
					 $("span.menu").click(function(){
					 $(".top-menu ul").slideToggle("slow" , function(){
					 });
					 });
					 </script>
					<!-- //script for menu -->
     			</div>

    			<style type="text/css">
					span.menu {
					  display: none;
					}

					@media only screen and (max-width:648px) {
						span.menu {
						display: block;
						 cursor: pointer;
						 margin: 14px 10px;
						}
					}				
			    </style>	
				<div class="clearfix"></div>	
			</div>
		</div>
	</div>

	<div class="maine">
		<div class="container">
			<div class="contact">
				<div class="contact-head text-center">
					<h3>Contáctanos</h3>
					</br>
				</div>		
							
				<div class="contact-grids">

					<div class="contact-map wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<div id="map" style="width:100%">
						</div> 
					</div>



					<!----- contact-form ------>
					<div class="contact-form wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<form>

							<div class="contact-form-row">
								<div>
									<span>Nombre :</span>
									<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
								</div>
								<div>
									<span>Correo :</span>
									<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
								</div>
								<div>
									<span>Asunto :</span>
									<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
								</div>								
							</div>							

							<div class="contact-form-row2 wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
								<span>Mensaje :</span>
								<textarea> </textarea>
							</div>

							<input type="submit" value="Enviar">

						</form>
					</div>
					<div class="formu3">
					
					
						<h3 class="suportt">Soporte Tecnico</h3 ></br>
						<p class="suporttt">- Soporte@itdecsa.com</p></br></br>

						<h3 class="suportt">Ventas y Servicios</h3 ></br>
						<p class="suporttt">- ventas@itdecsa.com</p></br></br>

						<h3 class="suportt">Información General</h3 ></br>
						<p class="suporttt">-informes@itdecsa.com</p>

						

						<style type="text/css">
						.suportt {
							color:#FF5500;

						}
						.suporttt {
							color:#fff;

						}
						</style>
						
					</div>


					<div class="formu3" >
					
					
						<h3 class="suportt">Visitas</h3 ></br >
						<script type="text/javascript" src="//ra.revolvermaps.com/0/0/1.js?i=0qn10ctxeiw&amp;s=250&amp;m=5&amp;v=false&amp;r=false&amp;b=000000&amp;n=false&amp;c=ff0000" async="async"></script>

						

					
						
					</div>
					
				</div>					
			</div>	
		</div>
	</div>

	<div class="categories-section">
		<div class="container">
		    <div class="footer-grids">
			    <div class="col-md-4 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	 				<h3>Próximos Eventos</h3>
	 				<div class="up1">
						<div class="up-img">
						     <img src="../images/im1.jpg">
						</div>

					    <div class="up-text">
							<a href="#">sagittis magna</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>

						<div class="clearfix"></div>
       			    </div>

					<div class="up1">
						<div class="up-img">
						    <img src="../images/im2.jpg">
						</div>

			    		<div class="up-text">
							<a href="#">Integer molest</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					 	</div>
						 <div class="clearfix"></div>
			        </div>


					<div class="up1">
						<div class="up-img">
							<img src="../images/im3.jpg">
						</div>

			    		<div class="up-text">
							<a href="#">Fusce suscipit</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					 	</div>
					 	<div class="clearfix"></div>
			        </div>
		 		</div>

		 		<div class="col-md-4 cat wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		   			<h3>Categorias</h3>
				    <ul>
						<li>Biometria y Seguridad.</li>
						<li>Productos y Software</li>
						<li>Servicios de Mantenimiento</li>
						<li>Mineria</li>	
					</ul>

				</div>

				<div class="col-md-4 cont wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		 		<h3>Contactos</h3>
					<ul>
						<li><i class="phone"></i></li>
						<li><p>+51 987 789 722</p>
						<p>+51 993 026 679</p>
						<p>+51 084 245 844</p>
						</li>
					</ul>

					<ul>
					    <li><i class="smartphone"></i></li>
						<li><p>Av. la Cultura 772, oficina 205, </p>
						<p>2do nivel, Esquina del paradero Amaura</p>
						<p> Cusco, Perú</p></li>
					</ul>

					<ul>
						<li><i class="message"></i></li>
						<li><a href="mailto:example@mail.com">Informes@itdecsa.com</a>
				        <a href="mailto:example@mail.com">rayedgard@itdecsa.com</a></li>
					</ul>
				</div>

				<div class="clearfix"></div>
		    </div>
		</div>
	</div>

	<div class="footer-section">
		<div class="container">

		    <div class="footer-top">
		 		<div class="social-icons wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<a href="https://www.facebook.com/pages/Informatic-Technology-Development-Corporation-SA/157087624356221?fref=ts" target="_blank"><i class="icon1"></i></a>
					<a href="#"><i class="icon2"></i></a>
					<a href="https://plus.google.com/104763782397023638437/posts" target="_blank"><i class="icon3"></i></a>		
			    </div>
			</div>

			<div class="footer-middle wow fadeInDown Big animated animated" data-wow-delay="0.4s">
		 		<div class="bottom-menu">
				    <ul>
					   	<li><a href="../index.php">Inicio</a></li>
					    <li><a href="quienessomos.php">Quienes Somos</a></li>
					  	<li><a href="servicios.php">Servicios</a></li>
						<li><a href="productos.php">Productos</a></li>					   	
					   	<li><a href="contactos.php">Contactos</a></li>
				    </ul>
				</div>
			</div>

			<div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<p> Copyright &copy;2015  All rights  Reserved </p>
			</div>
				<script type="text/javascript">
					$(document).ready(function() {
						/*
						var defaults = {
				  			containerID: 'toTop', // fading element id
							containerHoverID: 'toTopHover', // fading element hover id
							scrollSpeed: 1200,
							easingType: 'linear' 
				 		};
						*/
						
						$().UItoTop({ easingType: 'easeOutQuart' });
						
					});
				</script>

				<a href="#" id="toTop" style="display: block;">
				 	<span id="toTopHover" style="opacity: 1;"> </span>
				</a>
		</div>
	</div>
</body>
</html> 