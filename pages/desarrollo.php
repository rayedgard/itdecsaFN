



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










		 <!--para los videos-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>	
		<!--fin videos-->
 
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
<body>



<?php
include("../administracion/funciones.php");
include("../conexion.php");
$link = Conectarse();
$id=desencripta($_GET['c'],"rayedgard");

$consulta = mysql_query("SELECT nombre,imagen,descripcion,file,tecnicas,requisitos FROM tsistemas where estado=0  and id='$id'",$link);
$resultado = mysql_fetch_array($consulta);

?>


















 	<div class="header2 head-top " id="home">
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
					   
					   	<li><a href="contactos.php">Contactos</a></li>
				    </ul>
    				 <!-- script for menu -->				
					 <script>
					 $("span.menu").click(function(){
					 $(".top-menu ul").slideToggle("slow", function(){
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

			</div><!-- find e header-top-->

			
		</div>



		<img src="../administracion/imagenes/sistemas/<?php echo $resultado[1];?>" alt="" style="z-index:-100;" />
	




	</div>

	<div class="content">
	<!-- 404 -->

	<div class="services-section">
		<div class="container">
			<h3><?php echo $resultado[0];?></h3>
			<div class="services-grids">
				<div class="services">

					<!-- contenido recursivo para seecciones de desarrollo de software -->
					<div class="services-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">


						<?php
							echo $resultado[2];
						?>
							
						
						<div class="tabs" >	

							<div class="contenedor" style="border-top-left-radius: 2em ;border-top-right-radius: 2em">						
								<ul>
									<li class="button demo manu" >Manuales</li>									
		  	  						<li class="button demo vi">Videos</li>
		  							<li class="button demo soft">Requisitos</li>
									<li class="button demo espe">Especificaciones</li> 		
				   				</ul>  

							</div>

							<div class="contenedor1 manuales " style="display:none;border-bottom-right-radius: 2em;border-bottom-left-radius:2em;">


							
								<h3 style="font-size:2.5em;padding-top:8%;">Manual De Usuario</h3>	

								<a href="../administracion/imagenes/sistemas/<?php echo $resultado[3];?>" style="color:#fff;text-align: center;" target="_blank">
									<img src="../images/iconos/downloads.png" style="width:10%;height:18%;">
								</a></br></br>
								<p style="">

								Tamano de Archivo: <?php echo filesize("../administracion/imagenes/sistemas/$resultado[3]")."&nbsp KB";?>
								</br>
								

								Ultima modificacion del archivo:

								 <?php 

								$nombre_archivo = "../administracion/imagenes/sistemas/$resultado[3]";						

								if (file_exists($nombre_archivo)) {
								    echo date("F d Y H:i:s.", fileatime($nombre_archivo));
								}

								?>
 								</br>
								<p>		
							</div>

							<div class="contenedor1 videos"  style="border-bottom-right-radius: 2em;border-bottom-left-radius:2em;">
								<div id="videos"><!--VIDEOS-->
									<div class="video">   <!--reprosuctor de video grande-->			    
										<?php 
								
										//CONESTA CONSULTA CAPTURAMOS EL MAXIMO Y ULTIMO DE LOS VIDEOS AGREGADOS 
										$consulta5 = mysql_query("SELECT max(id)  FROM tvideos where estado=0 and ids='$id'",$link);
										$id= mysql_fetch_array($consulta5);


										$consulta4 = mysql_query("SELECT link  FROM tvideos WHERE id='$id[0]' ",$link);
										$row4= mysql_fetch_array($consulta4);
										?>
							    
							 			<div id="contenedorYT">
							 				Cargando ...
							 			</div>
										<script type="text/javascript">
										  swfobject.embedSWF(
										    'http://www.youtube.com/v/<?php echo $row4[0];?>&enablejsapi=1&rel=0&fs=1',
								   			'contenedorYT',
								   			'100%','100%', '8',null,null,
								   		 {allowScriptAccess: 'always',allowFullScreen: 'true'},
								   		 {id: 'reproductorYT'});

										  function cargarVideo(id) {
										    var o = document.getElementById( 'reproductorYT' );
										    if( o ) {o.loadVideoById( id );}
										  }
										</script>
					 				</div> <!--fin video reproductor grande-->

									<div class="contMin">
									    <?php
											$consulta3="SELECT nombre, link FROM tvideos WHERE estado=0 ORDER BY id DESC"; 
											$resultado3 = mysql_query($consulta3,$link);
											//nombre del titulo
												$titulo3=array();
												$link3=array();
												
											while($row3=  mysql_fetch_array($resultado3))
													{
													array_push($titulo3,$row3[0]);
													array_push($link3,$row3[1]);
													}
											for($k=0;$k<count($titulo3);$k++)
										{
										?>    
						 				<div class="Min" style="border-bottom: 2px solid #000;">
						 					<div class="ContenedorImgMin">
												<a href="javascript:cargarVideo('<?php echo $link3[$k];?>');" title="<?php echo $titulo3[$k];?>"><img src="http://img.youtube.com/vi/<?php echo $link3[$k];?>/1.jpg"/>
												</a>
											</div>
											<div class="nonMin">
												<a style="font-size:1.2em;color:#C2C0C0" href="javascript:cargarVideo('<?php echo $link3[$k];?>');" title="<?php echo $titulo3[$k];?>">
													<?php echo $titulo3[$k];?>
												</a>
											</div>

										</div>
										 <?php
											}
											?> 
				     				</div>
								</div><!--FIN VIDEOS-->  
							</div>

							<div class="contenedor1 software" style="display:none;border-bottom-right-radius: 2em;border-bottom-left-radius:2em;">


							<?php
								echo $resultado[4];
							?>

							</div>

							<div class="contenedor1 especificaciones"  style="display:none;border-bottom-right-radius: 2em;border-bottom-left-radius:2em;">


							<?php
								echo $resultado[5];
							?>


							</div>
							
						</div>

						<script type="text/javascript">

					          
					        $('.manu').click(function(){
					        	$('.videos').fadeOut(1);
					        	$('.software').fadeOut(1);
					        	$('.especificaciones').fadeOut(1);
					            $('.manuales').slideToggle(1);
					        });

					         $('.vi').click(function(){
					         	$('.manuales').fadeOut(1);
					        	$('.software').fadeOut(1);
					        	$('.especificaciones').fadeOut(1);
					            $('.videos').slideToggle(1);
					        });

					          $('.soft').click(function(){
					          	$('.videos').fadeOut(1);
					        	$('.manuales').fadeOut(1);
					        	$('.especificaciones').fadeOut(1);
					            $('.software').slideToggle(1);
					        });

					         $('.espe').click(function(){
					         	$('.videos').fadeOut(1);
					        	$('.software').fadeOut(1);
					        	$('.manuales').fadeOut(1);
					            $('.especificaciones').slideToggle(1);
					        });

    				    </script>

						<style type="text/css">

							/*videos*/
							#videos
							{

							overflow:inherit;
							width:100%;
							float:left;
							height:335px;

							background:url(../images/fon.png);
							padding-left:20px;
							padding-top:20px;


							-moz-border-radius: 10px; /* Firefox*/
							-ms-border-radius: 10px; /* IE 8.*/
							-webkit-border-radius: 10px; /* Safari,Chrome.*/
							border-radius: 10px; /* El estándar.*/

							 background-color:#1E1E1E;
							/*para la opacidad   pero opaca todo el div
							filter:alpha(opacity=50);
							  -moz-opacity:0.5;
							  -khtml-opacity: 0.5;
							  opacity: 0.5;*/
							 
							  /*fin opacidad*/
							}


							.video
							{
							    float:left;
							    height:100%;
							    width:55%;
							    /*border:#FFF solid 1px;*/
							}


							/*noticias*/
							.contMin
							{
							 width:45%;
							 overflow:hidden; 
							 margin-top:25px;

							 float:left; padding: 0px 5px 5px 10px;
							  overflow-y:scroll;
							 height: 100%;
							}

							.Min
							{
							    overflow:hidden;
							    width: 100%;

							 }

							.Min:hover
							{overflow:hidden; 
							 background:#3E3D3C; 
							 }
							.noti:hover h3
							{color:#000; }


							.ContenedorImgMin 
							{ 
							    padding:7px 2px 7px 2px;

							    overflow:hidden; width:30%;
							    float:left;
							}

							.nonMin
							{   
							    width:65%;
							    float:left; padding:5px 5px 5px 10px;
							    
							    font-size: 12px;
							}


							
							 img:hover{
								color:#F70303;
							}

							.button.demo{
								border: none;
								padding: 18px 15px;
								background:#0a0b0b;
								display:inline-block;
								margin: 15px 15px;	
								
							    height: 19px;
							    line-height: 0px;
							    bottom: 0;
							    font-size: 14px;
							    font-weight: 400;
							    padding: 13px 23px;
							    border: 1px solid #FFF;
							    color: #fff;
							    background: transparent;
							    -webkit-transition: :all .3s ease;
							    -moz-transition: all .3s ease;
							    -o-transition: all .3s ease;
							    transition: all .3s ease;
							    -webkit-border-radius: 3px;
							    -moz-border-radius: 3px;
							    border-radius: 3px;
							    cursor: pointer;

							}

							.button.demo:hover{
								color:#fff;
								background:#2c2c2c;
							}

							.button:hover,
							.button:active,
							.button:focus {
							 background:#fff;
							 color:#0a0b0b;
							}

							.contenedor{
								background-color: #151515;
								text-decoration: none;
							}
							.contenedor1{
								background-color: #191e20;
								
								height: 400px;
							}		

							.manuales{							
								height: 400px;
							}	

							.videos{							
								height: 400px;
							}	
							/*

					        .captionOrange, .captionBlack
					        {
					            color: #fff;
					            font-size: 20px;
					            line-height: 30px;
					            text-align: center;
					            border-radius: 4px;
					        }
					        .captionOrange
					        {
					            background: #EB5100;
					            background-color: rgba(235, 81, 0, 0.6);
					        }
					        .captionBlack
					        {
					        	font-size:16px;
					            background: #000;
					            background-color: rgba(0, 0, 0, 0.4);
					        }
					        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
					        {
					        	color: #ffffff;
					        	text-decoration: none;
					        }
					        a.captionOrange:hover
					        {
					            color: #eb5100;
					            text-decoration: underline;
					            background-color: #eeeeee;
					            background-color: rgba(238, 238, 238, 0.7);
					        }
					        .bricon
					        {
					            background: url(../img/browser-icons.png);
					        }
    		*/
			
						</style>						
	
					</div>
					<!-- FIN contenido recursivo para seecciones de desarrollo de software -->

					<div class="clearfix"></div>

					<div class="clase1" style="float:left;width:50%;margin-top:100px;">
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>

						<div class="fb-comments" data-href="https://www.facebook.com/Informatic-Technology-Development-Corporation-SA-157087624356221/" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
					</div>

					<div class="clase2" style="float:left;width:50%; margin-top:100px;">


					<h3 style="font-size:2.2em">Otro Software</h3>
						
	
					</div>

				</div>
			</div>
		</div>
	</div>




	<!-- 404 -->

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
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
   </div>
</body>
</html> 