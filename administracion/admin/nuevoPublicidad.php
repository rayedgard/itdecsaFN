<div class="bs-example" data-example-id="form-validation-states-with-icons">
<form class="form-horizontal" method="post" enctype="multipart/form-data" name="form2" >

	<div class="form-group">
		<div class="col-sm-8">
			<input type="text" name="nombre" class="form-control1" id="focusedinput" placeholder="Nombre de la publicidad">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="precio" class="form-control1" id="focusedinput" placeholder="Ingrese el precio del producto">
		</div>
	</div>

		
 	<div class="form-group">
        <div class="col-sm-8">
	        <label for="exampleInputFile">Seleccione la imgen de fondo de la publicidad</label>
	        <input type="file" name="foto" id="exampleInputFile">
	        <p class="help-block">Formatos PNG, JPG, GIF.</p>
	    </div>
    </div>

	<div class="form-group">
		<div class="col-sm-8">
              <label class="control-label normal">Fecha limite de la publicidad</label>
              <input type="date" name="tiempo" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="">
    	</div>
    </div>

	<div class="form-group">
        <div class="col-sm-8">
	        <input name="aceptar" type="submit" class="btn-success btn">
	    </div>
    </div>







 <?php
 $p=$_GET['p'];
 $q=encripta('1','rayedgard');


$aceptar = $_POST['aceptar'];
if($aceptar)
{

// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
date_default_timezone_set('UTC');
$fecha = date('Y-m-d'); 

$nombre= $_POST['nombre'];
$precio=$_POST['precio'];
$tiempo= $_POST['tiempo'];

$path1="../imagenes/publicidad/";	 
$nombre_temporal1= $_FILES['foto']['tmp_name'];
$nombre_archivo1 =$_FILES['foto']['name'];
$tipo_archivo1 = $_FILES['foto']['type']; 
$tamano_archivo1 =$_FILES['foto']['size'];
 

if (!((strpos($tipo_archivo1, "gif") || strpos($tipo_archivo1, "png") || strpos($tipo_archivo1,"jpeg") || strpos($tipo_archivo1,"jpg")  && ($tamano_archivo1 < 900000)))) 

{ 
echo "La extensión o el tamaño del archivo de IMAGEN no es correcta. <br><br><table><tr><td><li>Se permiten archivos *.gif, *.png o *.jpg<br><li>se permiten archivos de 900 Kb maximo.</td></tr></table><br>";
}
else
{ 


$consulta = mysql_query("INSERT INTO tpublicidad (nombre,fotoFondo,tiempo,precio) VALUES ('$nombre','$nombre_archivo1','$tiempo','$precio')",$link);

$my_error = mysql_error($link);

		if(!empty($my_error))
		{		
			echo "Ha habido un error al insertar los valores. $my_error";
		}
		 else 
		{
			
			//antes de enviar los caracteres que pasamos por la URL debemos ponerlo en buen recaudo encriptar
					
			if(is_uploaded_file($nombre_temporal1))
			{
				copy($nombre_temporal1, $path1.$nombre_archivo1);
				// CREA UN DIRECTORIO CON PERMISOS DE ESCRITURA
				mkdir($path1.$nombre, 7777);

				echo "<meta http-equiv ='refresh' content='0;url=index.php?p=$p&q=$q>'";
			}
			else
			{
				echo "<br>Ocurrio un error al subir losla imagen. intentelo otra ves.";
			}
						
		} 

}

} 

?>



</form>
</div>