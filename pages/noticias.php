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
 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>


   <link rel="stylesheet" href="../css1/bootstrap.min.css" type="text/css" media="all">
   <link rel="stylesheet" href="../css1/font-awesome.css" type="text/css" media="all">
   <link rel="stylesheet" href="../css1/templatemo_style.css" type="text/css" media="all">


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





		









    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="http://www.itdecsa.com/muestras/itdecsaprueba/index.php" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Informatic Technology Development" />
    <meta property="og:description"   content="Es una empresa Peruana que brinda servicios de desarrollo de sistemas de software contamos con la tecnologia de vanguardia y con el personal especializado en cada área para brindar propuestas innovadoras de acuerdo con cada una de la necesidades de nuestros clientes a lo largo de nuestra trayectoria." />
    <meta property="og:image"         content="http://www.itdecsa.com/muestras/itdecsaprueba/banner6.jpg" />









</head>
<body style="background:#000000;">


<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:10px; top:10px;">
					    <a href="https://www.facebook.com/icpnac?fref=ts" class="a2a_button_facebook"></a>
					    <a href="https://twitter.com/ICPNACultural" class="a2a_button_twitter"></a>
					    <a href="https://www.google.com/maps/d/viewer?t=m&oe=UTF8&msa=0&ie=UTF8&mid=z2GfYE6MToNk.kwwE1r--3cL0" class="a2a_button_google_plus"></a>
					    <a class="a2a_button_pinterest"></a>
					    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
					</div>

					<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>


    <div class="header1" id="home">
		<div class="container">


			<div class="header-top" >
				<div class="top-menu" >
				    <span class="menu">
				    	<img src="../images/nav1.png" alt="" />
				    </span>
					<ul>
					   	<li><a href="../index.php">Inicio</a></li><label>/</label>
					    <li><a href="quienessomos.php" >Quienes Somos</a></li><label>/</label>
					  	<li><a href="servicios.php">Servicios</a></li><label>/</label>
					    <li><a href="productos.php">Productos</a></li><label>/</label>
					   	<li><a href="blog.php">Blog</a></li><label>/</label>
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
			<!--
			<div class="logo logo1">
				<a href="index.php">
					<img src="../images/logoitdecsaFinal.png" alt="" style="width:300px; height=150px "/>
				</a>
			</div>
			-->
		</div>
	</div>







<?php
include("../conexion.php");
$link = Conectarse();
$id=$_GET['c'];
$consulta = mysql_query("SELECT nombre,imagen,descripcion,fecha,link FROM tnoticias where estado=0  and id='$id'",$link);
$resultado = mysql_fetch_array($consulta);


$consulta1 ="SELECT id,nombre,imagen,descripcion,fecha FROM tnoticias where estado=0 ORDER BY fecha desc"; 
$resultado1 = mysql_query($consulta1,$link);

	//nombre del titulo
	$ids=array();
	$nombres=array();
	$imagens=array();
	$descripcions = array();
	$fechas = array();
while($row2 = mysql_fetch_array($resultado1))
		{
		array_push($ids,$row2[0]);
		array_push($nombres,$row2[1]);
		array_push($imagens,$row2[2]);
		array_push($descripcions,$row2[3]);
		array_push($fechas,$row2[4]);
		}

?>
















	<div class="content">
		<div class="aboutus-section">
	 		<div class="container">
				<h3><?php echo $resultado[0]; ?></h3>
				<img src="../administracion/imagenes/noticias/<?php echo $resultado[1]; ?>"/> 

				<div class="aboutus-grids">
					

 					<div class="alinia1 right-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">


					      
					      
					       <?php echo $resultado[2]; ?>

							<p style="text-align: right; color: #2FF41B;">FECHA DE PUBLICACION: <?php echo $resultado[3]; ?>
							</p>	
					       <p>FUENTE: 
					       <a href="<?php echo $resultado[4]; ?>" target="blank" style="text-align: right;" > <?php echo $resultado[4]; ?> </a>
					       </p>
					 



					    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your share button code -->
    <div class="fb-share-button" 
        data-href="http://itdecsa.com/pages/noticias.php?c=1" 
        data-layout="button_count">
    </div>


<div class=" wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">

<h2>Notícias relacionadas</h2>
							<?php
							//bucle para generar las noticias automaticamente
							for($j=0;$j<count($nombres);$j++)
							{
								?>


					  			<div style="width:30%;float:left;">
									<div style="float:left; width:39%;">
										<img src="../administracion/imagenes/noticias/<?php echo $imagens[$j]; ?>" style="width:80%;">
									</div>

				   					<div style="float:left; width:60%">
						 				<a href="noticias.php?c=<?php echo $ids[$j];?>"><?php echo  substr(strip_tags($nombres[$j]),0,50)."..."; ?></a>
										<p>
										<?php echo $fechas[$j];?>
										</p>
									</div>

									<div class="clearfix"></div>
				        		</div>

								<?php
								}
							?>

</div>





			</div>
			</div>
			</div>













		   <div class="footer-section">
		   <div class="container">
		   <div class="footer-top">
		 <div class="social-icons wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		<a href="https://www.facebook.com/pages/Informatic-Technology-Development-Corporation-SA/157087624356221?fref=ts" target="_blank"><i class="icon1"></i></a>
		<a href="#"><i class="icon2"></i></a>
		<a href="https://plus.google.com/118149220689952591619/about" target="_blank"><i class="icon3"></i></a>
		<a href="#"><i class="icon4"></i></a>
		</div>
		</div>
		 <div class="footer-middle wow fadeInDown Big animated animated" data-wow-delay="0.4s">
		 <div class="bottom-menu">
      <ul>
   	<li><a href="../index.php">Inicio</a></li>
    <li><a href="quienessomos.php">Quienes Somos</a></li>
  	<li><a href="servicios.php">Servicios</a></li>
	<li><a href="productos.php">Productos</a></li>
   	<li><a href="blog.php">blog</a></li>
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