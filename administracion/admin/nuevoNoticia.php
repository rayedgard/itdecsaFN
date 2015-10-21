<div class="bs-example" data-example-id="form-validation-states-with-icons">
<form class="form-horizontal" method="post" enctype="multipart/form-data" name="form2" >

	<div class="form-group">
		<div class="col-sm-8">
			<input type="text" name="nombre" class="form-control1" id="focusedinput" placeholder="Titulo de Noticia">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="link" class="form-control1" id="focusedinput" placeholder="Ingrese el link de la noticia (Fuente)">
		</div>
	</div>

		
 	<div class="form-group">
        <div class="col-sm-8">
	        <label for="exampleInputFile">Seleccione la imgen que representa la Noticia</label>
	        <input type="file" name="foto" id="exampleInputFile">
	        <p class="help-block">Formatos PNG, JPG, GIF.</p>
	    </div>
    </div>

	<div class="form-group">
	    <div class="col-sm-8">
	     	<textarea name="descripcion"  onFocus="if(this.value == 'Texto aqui...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Texto aqui...';}">Descripción...</textarea>
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
$enlace=$_POST['link'];
$descripcion= $_POST['descripcion'];

$path1="../imagenes/noticias/";	 
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


$consulta = mysql_query("INSERT INTO tnoticias (nombre,imagen,descripcion,fecha,link) VALUES ('$nombre','$nombre_archivo1','$descripcion','$fecha','$enlace')",$link);

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