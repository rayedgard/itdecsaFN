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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

<!---- start-smoth-scrolling---->

 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		}); 
	</script>
<!---End-smoth-scrolling---->

				<!--Animation-->
<script src="../js/wow.min.js"></script>
<link href="../css/animate.css" rel='stylesheet' type='text/css' />

<script src="../jssliderweb/jquery.min.js"> </script>
<script>
	new WOW().init();
</script>
<!---/End-Animation---->

</head>
<body>


  <div class="header1 head-top " id="home">
		<div class="container">
		<div class="header-top">
		<div class="top-menu">
		<span class="menu"><img src="../images/nav1.png" alt=""/> </span>
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
		
			  <div class="tainers-section" style="background:#151515">
	 				 <div class="container">
						<!--sreen-gallery-cursual-->
						<div class="col-md-3 tainer wow bounceInLeft" data-wow-delay="0.4s">
						      <h3 style="color:#ff5000;">Nuestros Paquetes</h3>
							  <p>Planes Diseño Web e Instalación de Sitios personales, profesionales o empresariales</p>
						</div>
						<div class="col-md-9 sreen-gallery-cursual wow bounceInRight" data-wow-delay="0.4s">
							
						       <div id="owl-demo" class="owl-carousel">


					                <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t1 (2).jpg" />
					                		</div>
					                	</div>
					                </div>


					                <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t2 (2).jpg" />
                                               </div>
					                		</div>
					                </div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t3 (2).jpg" />
                                               </div>
					                		</div>
					                	</div>
					               <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t1 (2).jpg" />
                                               </div>
					                		</div>
					                	</div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t2 (2).jpg" />
                                               </div>
					                		</div>
					                	</div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t4 (2).jpg" />
                                               </div>
					                		</div>
					                	</div>
					               <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t3 (2).jpg" />
                                               </div>
					                		</div>
					                	</div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t1 (2).jpg" />
                                               </div>
					                		</div>
					                	</div>

					                <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="../images/t4 (2).jpg" />
                                               </div>
					                		</div>
					                	</div>
					                </div>
				              </div>
							  <div class="clearfix"></div>

							  <!--/////////////// CODIGO PRA EL POPUP INICIAL ////////////////-->
							<link rel="stylesheet" type="text/css" href="../css/popup.css">
							<script src="../js/popup.min.js"></script>
							<script src="../js/jquery.colorbox.js"></script>
							<!--/////////////// FIN POPUP INICIAL ////////////////-->



							<!--/////////////// CODIGO QUE LLAMA EL POPUP INICIAL ////////////////-->
							    <script>
							    $('.item').click(function(){

							      function openColorBox(){
							        $.colorbox({iframe:true, overlayClose: false, fixed: true ,width:"80%", height:"80%", href:"http://www.sitepoint.com"});
							      }
							      setTimeout(openColorBox, 1000);

							      	
							      });


							    </script>
							<!--/////////////// FIN EL POPUP INICIAL ////////////////-->
						
					</div>
				</div>

					
				
							<link href="../csssliderweb/owl.carousel.css" rel="stylesheet">
							    <script src="../jssliderweb/owl.carousel.js"></script>
							    <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							         items :3,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>


		<style type="text/css">


			.item-grid:hover{
				opacity: 0.8;
				border: 2px solid #FF5000;

			}

			.trainee-section {
			  padding: 5em 0;
			  background-color: #eee;
			}
			.trainee-section h3 {
			  font-size: 2.5em;
			  font-weight: 700;
			  color: #151515;
			  text-align: center;
			  font-family: 'Orbitron', sans-serif;
			}
			.trainee-grids {
			  margin-top: 5em;
			}
			.trainee-grid{
			  position:relative;
			    cursor:pointer;
			}
			.trainee-grid img {
			  border-radius: 50%;
			  -o-border-radius: 50%;
			  -moz-border-radius: 50%;
			  -webkit-border-radius: 50%;
			  -ms-border-radius: 50%;
			}

			.trainee-grid h4 ,.trainee-grid a h5{
			  color: #fff;
			  text-align: center;
			  background-color: #FF5000;
			  font-size: 1em;
			  
			  padding: 0.4em;
			  width: 80%;
			  margin: 0 auto 0;
			 }
			.trainee-grid a h5 {
			   width: 67%;
			 }
			 .trainee-grid p {
			  text-align: center;
			  line-height: 1.7em;
			  font-size: 0.9em;
			  color: #1b1b1b;
			  margin-top: 1.5em;
			    cursor: text;
			}

			.trainee-grid:hover  .date{
			  transform: rotateY(360deg);
			  -webkit-transform: rotateY(360deg);
			  -moz-transform: rotateY(360deg);
			  -o-transform: rotateY(360deg);
			  -webkit-transition: 0.8s;
			  -moz-transition: 0.8s;
			  -o-transition: 0.8s;
			}

			.tainers-section {
			  padding: 4em 0;
			}
			.col-md-3.tainer {
			    margin: 0;
			  background-color: #000;
			  min-height: 442px;
			  margin-top: 1.2em;
			   padding: 2em 2em;
			}
			.tainer  h3 {
			   font-size: 2.5em;
			  font-weight: 700;
			  color: #ff1791;
			  font-family: 'Orbitron', sans-serif;
			  
			  line-height: 1.4em;
			}
			.tainer  p {
			  line-height: 1.7em;
			  font-size: 0.9em;
			  color: #fff;
			  margin: 1em 0;
			}

			/*-----Responsive-----*/
			@media (max-width:1440px){

			}
			@media (max-width:1366px){
				
			}
			@media (max-width:1280px){
				
				 .trainee-section h3,.tainer h3 {
				  font-size: 2.3em;
				  }
			}

			@media (max-width:1024px){
				.trainee-section h3,.tainer h3 {
				  font-size: 2.2em;
				}
				.tainer h3{
				 font-size: 2em;
				}
					.top-menu {
					  float: right;
					}
				  .blog_grid h3 a, .blog_grid h3 {
				  font-size: 0.95em;
				  }
				  .blog_grid h3 {
					  font-size: 1.3em;
					}
					
				  .col-md-3.tainer {
				  margin: 0;
				  min-height: 267px;
				  margin-top: 1em;
				  padding: 1em 1em;
				}
				
				h4.col-md-3.f-logo {
				  width: 90px;
				  height: 143px;
				  font-size: 4em;
				  padding: 37px 10px 14px 23px;
				  }
				 
				.trainee-grid a h4, .trainee-grid a h5 {
				  font-size: 1em;
				  padding: 0.4em;
				  width: 93%;
				  }
				  .trainee-grid a h5 {
				  width: 83%;
				}
				.trainee-section {
				  padding: 3em 0;
				}	
			}
				@media (max-width:768px){
				
					.trainee-section h3, .tainer h3 {
					  font-size: 2em;
					}
					.col-md-3.tainer {
					  margin: 0;
					  min-height: 187px;
					  margin-top: 1em;
					  padding: 1em 1em;
					}
				
					h4.col-md-3.f-logo {
					  width: 59px;
					  height: 97px;
					  font-size: 2em;
					  padding: 31px 10px 7px 19px;
					  float: left;
					  margin-top: 8px;
					}

					.content {
					  padding: 2em 0;
					}
					.trainee-grid {
					  position: relative;
					  cursor: pointer;
					  float: left;
					  width: 50%;
					}
					.trainee-grid:nth-child(3){
					  display:none;
					}
				
				}


					@media (max-width:640px){
					
						  .tainers-section {
						  padding: 2em 0;
						}
						.trainee-section h3, .tainer h3 {
						  font-size: 1.8em;
						}					
						
						.trainee-grid a h4, .trainee-grid a h5 {
						  font-size: 0.9em;
						  padding: 0.4em;
						  width: 93%;
						}
						.trainee-grid a h5 {
						  width: 78%;
						}
						
						
						.trainee-grids {
					  margin-top: 2em;
						}
					
					}


				@media (max-width:480px){
					
					.trainee-section h3, .tainer h3 {
					  font-size: 1.6em;
					}
					.tainers-section {
					  padding: 1em 0;
					}
					
					
					.tainer p {
					  font-size: 0.9em;
					  margin: 0.5em 0;
					}
					.col-md-3.tainer {
					  margin: 0;
					  min-height: 155px;
					  margin-top: 1em;
					  padding: 1em 1em;
					}
					
					.bottom-color p {
					  font-size: 0.85em;
					}
				
					.trainee-grid img {
					  border-radius: 50%;
					  -o-border-radius: 50%;
					  -moz-border-radius: 50%;
					  -webkit-border-radius: 50%;
					  -ms-border-radius: 50%;
					  margin: 0 auto;
					}
					.trainee-grid {
					  width: 100%;
					  margin: 0 auto 6%;
					}
					.trainee-section {
					  padding: 1.5em 0 0.5em 0;
					}
					  .trainee-grid:nth-child(3){
					   display:block;
					  }
				}
				@media (max-width:320px){
					
					 .trainee-section h3, .tainer h3 {
					  font-size: 1.25em;
					}
					.tainer p {
					  font-size: 0.85em;
					  margin: 0.3em 0;
					}
					.col-md-3.tainer {
					  margin: 0;
					  min-height: 155px;
					  margin-top: 1em;
					  padding: 0.5em 0.5em;
					}
					
					
					.trainee-grid a h4, .trainee-grid a h5 {
					  font-size: 0.85em;
					  padding: 0.4em;
					  width: 93%;
					}
					.trainee-grid a h5 {
					  width: 81%;
					}
					.trainee-grid p {
					  font-size: 0.83em;
					  margin-top: 1em;
					}
					.trainee-grid {
					  width: 100%;
					  margin: 0 auto 11%;
					}				
				}
		</style>

			<?php
				include("../conexion.php");
				$link = Conectarse();
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