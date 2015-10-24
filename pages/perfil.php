<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfiles</title>

	<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
</head>

<?php

include("../conexion.php");
$link = Conectarse();

$idCodigo = $_GET['id'];


$consulta = mysql_query("SELECT id,nombre,cargo,correo,imagen,descripcion,file FROM tperfil where estado=0 AND id=$idCodigo",$link); 
$resultado = mysql_fetch_array($consulta);

	//nombre del titulo
	/*$id=array();
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
		*/

?>

<body style="background-color:#151515;">
	<div  class="foto1">

	<img src="../administracion/imagenes/perfil/<?php echo $resultado[4]; ?>" alt="" style="width:75%;margin-bottom:20px;">
		

	</div>


	<div class="atributos">

	<h3> DATOS PERSONALES</h3>
	<p>Nombre : <?php echo $resultado[1];?><br>
	Cargo :<?php echo $resultado[2];?><br>
	Correo: <?php echo $resultado[3];?><br>
	</p><br>

	</div>



	<div class="descripcion">
	<h3>DESCRIPCION</h3>
		<p class="prueba">
		<?php echo $resultado[5];?>
		</p>
	</div>


		
	<div class="descarga">
	<h3>CURRICULUM VITAE </h3>
		
		<a href="../administracion/imagenes/perfil/<?php echo $resultado[6];?>" style="color:#fff;text-align: center;" >
			<img src="../images/iconos/downloads.png" style="width:10%;height:18%;">
		</a>

	</div>


	<style type="text/css">
	body{
		 /* background: url(../images/background/bgperfil.jpg);*/
		  font-family: 'Roboto', sans-serif;
		  color:#A5A2A2;
		  
	}
	p.prueba{
		 font-family: 'Roboto', sans-serif;

	}




	.foto1{
		float:left;
		width: 50%;
		

	}

	.atributos{
		float:left;

		
	}

	.descripcion{
		clear:both;
	}

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


	</style>

	
</body>
</html>