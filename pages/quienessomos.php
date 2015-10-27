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

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3OU3AV4FqT8DIgIfcN0DBfkbqk96DpTr";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->




<?php

include("../conexion.php");
$link = Conectarse();


$consulta ="SELECT id,nombre,cargo,correo,face,google,lin,imagen FROM tperfil where estado=0 ORDER BY id desc "; 
$resultado = mysql_query($consulta,$link);

	//nombre del titulo
	$id=array();
	$nombre=array();
	$cargo=array();
	$correo=array();
	$face=array();
	$google=array();
	$lin=array();
	$imagen=array();
	
while($row2 = mysql_fetch_array($resultado))
		{
		array_push($id,$row2[0]);
		array_push($nombre,$row2[1]);
		array_push($cargo,$row2[2]);
		array_push($correo,$row2[3]);
		array_push($face,$row2[4]);
		array_push($google,$row2[5]);
		array_push($lin,$row2[6]);
		array_push($imagen,$row2[7]);
		}
		

?>




</head>

<body style="background:#000000;">
    <div class="header1" id="home">
		<div class="container">

			<div class="header-top" >
		
				<div class="top-menu" >
					
				    <span class="menu">
				    	<img src="../images/nav1.png" alt=""/>
				    </span>
					<ul>
					   	<li><a href="../index.php">Inicio</a></li><label>/</label>
					    <li><a href="quienessomos.php" class="active">Quienes Somos</a></li><label>/</label>
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

		</div>
		
	</div>

	<div class="content">
		<div class="aboutus-section">
	 		<div class="container">
				<h3>Quienes Somos</h3>
				<div class="aboutus-grids">

					<div class="col-md-5 left-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<div class="aboutus1">
							<h4>Ventajas</h4>
							<ul>
								<li>Integra al equipo</li>
								<li>Ahorra el tiempo de los clientes</li>
								<li>La tecnología permite comunicar a todos los niveles</li>
								<li>Las ventajas de los dispositivos móviles</li>
								<li>La experiencia del cloud computing</li>
								<li>La tecnología diferencia a los negocios</li>
								<li>Si no puedes adquirir el equipo, réntalo</li>
							</ul>
						</div>

						<div class="aboutus2">
							<h4>Testimonios</h4>
								<div class="ab1">
									<p>suadaorcnec sit amet eroorem ipsum dol. Or sit amt consc tetuer aiing elit. Mauris fermentum tumagna. Sed laoreet aliquam leo. Ut te dolor dapibus eget elentu vel cursus eleifend elit. Aenean auctor wrna. Aliqua volutpat. Duis ac turpis. Integer rutrum ante eu lacuest um liberoisl porta vel sceleisque eget malesuada at neque. Vivam nibhus  metus</p>
									<a href="#">JOHN ANDERSON</a>
							 	</div>

							    <div class="ab2">
							        <p> sit amet eroorem ipsum dol. Or sit amt consc tetuer aiing elit. Mauris fermentum tumagna. Sed laoreet aliquam leo. Ut te dolor dapibus eget elentu vel cursus eleifend elit. Aenean auctor wrna. Aliqua volutpat. Duis ac turpis. Integer rutrum ante eu lacuest um liberoisl porta vel sceleisque eget malesuada at neque. Vivam nibhus  metus</p>
							 	    <a href="#">OLIVIA GROSH</a>
							    </div>
						</div>
						<div class="clearfix"></div>
					</div>

 					<div class="col-md-7 right-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					    <div class="aboutus3">
					      
					       <p>ITDECSA es una empresa peruana que brinda servicios de desarrollo de sistemas de software, contamos con la tecnología de vanguardia y con el personal especializado en cada área para brindar propuestas innovadoras de acuerdo con cada una de las necesidades de nuestros clientes A lo largo de nuestra trayectoria ITDECSA se ha especializado en las siguientes aéreas.</p>
					    </div>

					    <div class="aboutus3">
					       <h5>MISIÓN</h5>
					       <p>Somos una empresa dedicada al desarrollo de tecnologías informáticas de última generación, satisfaciendo las necesidades de nuestros clientes. Somos altamente efectivos, sofisticados y oportunos en nuestros servicios. Y nuestros productos son utilizados como herramientas de apoyo en la toma de decisiones y mejora de procesos..</p>
					    </div>

					    <div class="aboutus3">
					       <h5>VISIÓN</h5>
					       <p>Somos una empresa altamente competitiva y rentable, que ofrece a sus clientes servicios informáticos de alta calidad, desarrollados por personal y proveedores líderes en el mercado, comprometidos con las necesidades más exigentes de nuestros clientes, trabajamos con integridad, compromiso, responsabilidad, honestidad, proactividad y seriedad, reconocidos por nuestros clientes y proveedores como una empresa líder en el mercado..</p>
					    </div>
     

	  					<div class="aboutus4">
      						<h4>Nuestro grupo de trabajo</h4>
							<?php							
							for($j=0;$j<count($nombre);$j++)
							{
								$y++;
							?> 
						        <div class="col-md-4 team-grid">
									<div class="container">
						                <div class="row">
						                    <div class="team-member col-md-3 col-sm-6" style="padding-left:0px;">
						                        <div class="member-thumb">
						                            <img src="../administracion/imagenes/perfil/<?php echo $imagen[$j]; ?>" alt="" style="display: block;">
						                            <div class="team-overlay">
						                                <span> <?php echo $cargo[$j]; ?> </span>
						                                <ul class="social">
						                                    <li><a href="<?php echo $face[$j]; ?>" class="fa fa-facebook" style="color:#FF5500;" target="_blank"></a></li>
						                                    <li><a href="<?php echo $google[$j]; ?>" class="fa fa-google-plus" style="color:#FF5500;" target="_blank"></a></li>
						                                    <li><a href="<?php echo $lin[$j]; ?>" class="fa fa-linkedin" style="color:#FF5500;" target="_blank"></a></li>
						                                </ul>
						                            </div> <!-- /.team-overlay -->
						                        </div> <!-- /.member-thumb -->
						                    </div> <!-- /.team-member -->
						                </div> <!-- /.row -->
						            </div> <!-- /.container -->
							 		
							  		<h5 id="show<?php echo $y; ?>" style="font-size:15px; text-align: center; cursor:pointer; "><?php echo $nombre[$j]; ?></h5>
							  		
							  		<p style="text-align: center; ">
							  			<mailto><?php echo $correo[$j]; ?></mailto>
							  		</p>

							  		<script type="text/javascript">
										$(document).ready(function(){
										 		var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=yes, width=550, height=500, top=100, left=450";

											    $('#show<?php echo $y; ?>').click( function() {  
											        window.open('perfil.php?id=<?php echo $id[$j];?>',"",opciones);  
											    }); 
											});
									</script>


						   		</div>
							<?php
							}
							?>
							 <div class="clearfix"></div>
		 				</div>
					</div>
				</div>
			</div><!-- fin container -->

			<!--stilo para los perfiles-->
			<style type="text/css">

            	@media only screen and (max-width:1024px) {
 
				}

				@media only screen and (max-width:768px) {

				}

				@media only screen and (max-width:648px) {

				}

				@media only screen and (max-width:480px){
				
				}

				@media only screen and (max-width:320px){
				
				}

				.content-section {
				  margin-top: 80px;
				  padding-top: 60px;
				}

				.content-section#services {
				  margin-top: 0px;
				}

				.team-member {
				  margin-bottom: 30px;
				}
				.team-member .member-thumb {
				  position: relative;
				  overflow: hidden;
				  border-radius: 50%;
				  -webkit-border-radius: 50%;
				  -moz-border-radius: 50%;
				  width: 185px;
				  height:185px;
				}
				.team-member .member-thumb img {
				  width: 100%;
				}
				.team-member .member-thumb .team-overlay {
				  position: absolute;
				  width: 101%;
				  height: 101%;
				  border-radius: 50%;
				  -webkit-border-radius: 50%;
				  -moz-border-radius: 50%;
				  text-align: center;
				  top: 0;
				  left: 0;
				  background-color: #FF5500;
				  color: white;
				  opacity: 0;
				  visibility: hidden;
				  -webkit-transition: all 200ms ease-in-out;
				  -moz-transition: all 200ms ease-in-out;
				  transition: all 200ms ease-in-out;
				}
				.team-member .member-thumb .team-overlay h3 {
				  font-size: 18px;
				  text-transform: uppercase;
				  color: white;
				  display: inline-block;
				  padding-bottom: 10px;
				  border-bottom: 1px solid white;
				  margin-top: 64px;
				}
				.team-member .member-thumb .team-overlay span {
				  text-transform: uppercase;
				  font-weight: 300;
				  margin-top: 10px;
				  display: block;
				  padding-top:25%; border-bottom: 3px solid white;padding-bottom:12px;
				}
				.team-member .member-thumb .team-overlay ul.social {
				  display: block;
				  margin-top: 20px;
				}
				.team-member .member-thumb .team-overlay ul.social li {
				  display: inline-block;
				}
				.team-member .member-thumb .team-overlay ul.social li a {
				  width: 36px;
				  height: 36px;
				  background-color: white;
				  line-height: 40px;
				  color: #ec523f;
				  border-radius: 18px;
				  -webkit-border-radius: 18px;
				  -moz-border-radius: 18px;
				}
				.team-member .member-thumb:hover .team-overlay {
				  opacity: 1;
				  visibility: visible;
				}
		
            </style>
	  
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