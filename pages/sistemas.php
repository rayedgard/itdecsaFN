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
<body style="background-color:#000000;">
  <div class="header1 head-top " id="home">
		<div class="container">
		<div class="header-top">
		<div class="top-menu">
		<span class="menu"><img src="../images/nav1.png" alt=""/> </span>

     <ul>
   	<li><a href="../index.php">Inicio</a></li><label>/</label>
    <li><a href="quienessomos.php">Quienes Somos</a></li><label>/</label>
  	<li><a href="servicios.php" >Servicios</a></li><label>/</label>
	<li><a href="productos.php">Productos</a></li><label>/</label>
   	
   	<li><a href="contactos.php">Contactos</a></li>
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




<?php
include("../administracion/funciones.php");
include("../conexion.php");
$link = Conectarse();



$consulta ="SELECT id,nombre,imagen FROM tsistemas where estado=0 ORDER BY id"; 
$resultado = mysql_query($consulta,$link);

	//nombre del titulo
	$id=array();
	$nombre=array();
	$imagen = array();
while($row2 = mysql_fetch_array($resultado))
		{
		array_push($id,$row2[0]);
		array_push($nombre,$row2[1]);
		array_push($imagen,$row2[2]);
		}
		

?>





		 <div class="content">
		 		 <div class="services-section">
		 		<div class="container">
						<h3> Nuestros Sistemas Desarrollados </h3>
						<div class="services-grids">
						<div class="service1">
						


							<?php
							for($j=0;$j<count($nombre);$j++)
							{
							?>

							<div class="col-md-4 services-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
								 <a href="../administracion/imagenes/sistemas/<?php echo $imagen[$j];?>" class="swipebox">
								 <img src="../administracion/imagenes/sistemas/<?php echo $imagen[$j];?>" class="img-responsive" alt="" style="border-radius:50%;margin-left:18%;" /></a>
								 <p><?php echo $nombre[$j];?></p>
								
								<a href="desarrollo.php?c=<?php echo encripta($id[$j],'rayedgard');?>" class="button1 hvr-shutter-in-vertical">leer más</a>
							</div>

							<?php 
							$cont++;
							} 
							?>




						</div>
						</div>
						</div>
					  </div>
					
		   </div>
		    







			<?php
				
				include("inferior.php");
			?>











		   <div class="footer-section">
		   <div class="container">
		   <div class="footer-top">
		 <div class="social-icons wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		<a href="https://www.facebook.com/pages/Informatic-Technology-Development-Corporation-SA/157087624356221?fref=ts" target="_blank"><i class="icon1"></i></a>
		<a href="#"><i class="icon2"></i></a>
		<a href="https://plus.google.com/118149220689952591619/about" target="_blank"><i class="icon3"></i></a>
		
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
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
		   </div>

 </body>
</html> 