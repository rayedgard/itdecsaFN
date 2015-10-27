
<?php



$consulta ="SELECT id,nombre,imagen,descripcion,fecha FROM tnoticias where estado=0 ORDER BY fecha desc limit 3"; 
$resultado = mysql_query($consulta,$link);

	//nombre del titulo
	$id=array();
	$nombre=array();
	$imagen=array();
	$descripcion = array();
	$fecha = array();
while($row2 = mysql_fetch_array($resultado))
		{
		array_push($id,$row2[0]);
		array_push($nombre,$row2[1]);
		array_push($imagen,$row2[2]);
		array_push($descripcion,$row2[3]);
		array_push($fecha,$row2[4]);
		}
		

?>




    <div class="categories-section">
		   		<div class="container">
		  			<div class="footer-grids">
						<div class="col-md-4 up wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<h3>Noticias Recientes</h3>
				  		






							<?php
							//bucle para generar las noticias automaticamente
							for($j=0;$j<count($nombre);$j++)
							{
							?>


				  			<div class="up1">
								<div class="up-img">
								
									<img src="administracion/imagenes/noticias/<?php echo $imagen[$j]; ?>">
								
								</div>

			   					<div class="up-text">
					 				<a href="pages/noticias.php?c=<?php echo $id[$j];?>"><?php echo  substr(strip_tags($nombre[$j]),0,50)."..."; ?></a>
									<p>
									<?php echo $fecha[$j];?>
									</p>
								</div>

								<div class="clearfix"></div>
			        		</div>

							<?php
							}
							?>





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
						        </li>
							</ul>
						</div>

		 				<div class="clearfix"></div>
		 			</div>
		  		</div>
		    </div>




		    <!-- AQUI COMIENZA EL PANEL DESLIZANTE menu de productos-->
  
<div class="panel">
	<h3>FORMULARIO DE ACCESO</h3>
	<hr>

<div style="clear:both;"></div>

	

<form class="form-horizontal" method="POST" target="_blank" action="administracion/sv.php" enctype="multipart/form-data"  >

	<div class="form-group">
		<div class="col-sm-8">
			<input type="text" name="correo" class="form-control1" id="focusedinput" placeholder="E-mail">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="password" name="pass" class="form-control1" id="focusedinput" placeholder="Contraseña">
		</div>
	</div>

	<div class="form-group">
        <div class="col-sm-8">
	        <input name="aceptar" type="submit" class="btn-success btn">
	    </div>
    </div>
</form>



<!--FIN FLAS RELOJES-->
            
        </div>
        
  </div>
<div style="clear:both;"></div>

</div>
<a class="trigger" href="#">Sala Virtual</a>
 
<!--FIN MENU DE PRODUCTOS -->


   <?php





?>