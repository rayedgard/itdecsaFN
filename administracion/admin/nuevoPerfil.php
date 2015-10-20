

<div class="bs-example" data-example-id="form-validation-states-with-icons">
<form class="form-horizontal" method="post" enctype="multipart/form-data" name="form2" >

	<div class="form-group">
		<div class="col-sm-8">
			<input type="text" name="nombre" class="form-control1" id="focusedinput" placeholder="Nombres y apellidos">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="cargo" class="form-control1" id="focusedinput" placeholder="Cargo del perfil">
		</div>
	</div>

		<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="correo" class="form-control1" id="focusedinput" placeholder="E-mail Institucional">
		</div>
	</div>

 	<div class="form-group">
        <div class="col-sm-8">
	        <label for="exampleInputFile">Seleccione la fotografia del perfil</label>
	        <input type="file" name="foto" id="exampleInputFile">
	        <p class="help-block">Formatos PNG, JPG, GIF.</p>
	    </div>
    </div>

	<div class="form-group">
	    <div class="col-sm-8">
	     	<textarea name="descripcion"  onFocus="if(this.value == 'Texto aqui...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Texto aqui...';}">Descripción del Paquete...</textarea>
		</div>
	</div>

	<div class="form-group">
        <div class="col-sm-8">
	        <label for="exampleInputFile">Seleccione el Archivo</label>
	        <input type="file" name="file" id="exampleInputFile">
	        <p class="help-block">Formatos PDF, DOC, SXLS</p>
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

$nombre= $_POST['nombre'];
$cargo=$_POST['cargo'];
$correo= $_POST['correo'];
$descripcion= $_POST['descripcion'];

$path1="../imagenes/perfil/";	 
$nombre_temporal1= $_FILES['foto']['tmp_name'];
$nombre_archivo1 =$_FILES['foto']['name'];
$tipo_archivo1 = $_FILES['foto']['type']; 
$tamano_archivo1 =$_FILES['foto']['size'];
 
$nombre_temporal2= $_FILES['file']['tmp_name'];
$nombre_archivo2 =$_FILES['file']['name'];
$tipo_archivo2 = $_FILES['file']['type']; 
$tamano_archivo2 =$_FILES['file']['size'];

if (!((strpos($tipo_archivo1, "gif") || strpos($tipo_archivo1, "png") || strpos($tipo_archivo1,"jpeg") || strpos($tipo_archivo1,"jpg")  && ($tamano_archivo1 < 900000)))) 

{ 
echo "La extensión o el tamaño del archivo de IMAGEN no es correcta. <br><br><table><tr><td><li>Se permiten archivos *.gif, *.png o *.jpg<br><li>se permiten archivos de 900 Kb maximo.</td></tr></table><br>";
}
else
{ 


$resultado = mysql_query("INSERT INTO tperfil(nombre,cargo,correo,imagen,descripcion,file) VALUES ('$nombre','$cargo','$correo','$nombre_archivo1','$descripcion','$nombre_archivo2')",$link);

$my_error = mysql_error($link);

		if(!empty($my_error))
		{		
			echo "Ha habido un error al insertar los valores. $my_error";
		}
		 else 
		{
			
			//antes de enviar los caracteres que pasamos por la URL debemos ponerlo en buen recaudo encriptar
					
			if(is_uploaded_file($nombre_temporal1) and is_uploaded_file($nombre_temporal2))
			{
				copy($nombre_temporal1, $path1.$nombre_archivo1);
				copy($nombre_temporal2, $path1.$nombre_archivo2);
				echo "<meta http-equiv ='refresh' content='0;url=index.php?p=$p&q=$q>'";
			}
			else
			{
				echo "<br>Ocurrio un error al subir los archivos. intentelo otra ves.";
			}
			
			

		} 

}

} 

?>







</form>
</div>