<?php
 $cod=desencripta($_GET['cod'],"rayedgard");
 // consulta a la base de datos
$consulta = mysql_query("SELECT nombre,fotoFondo,tiempo,precio FROM tpublicidad WHERE id='$cod'",$link);
$resultado = mysql_fetch_array($consulta);

?>


<div class="bs-example" data-example-id="form-validation-states-with-icons">
<form class="form-horizontal" method="post" enctype="multipart/form-data" name="form2" >

	<div class="form-group">
		<div class="col-sm-8">
			<input type="text" name="nombre" class="form-control1" id="focusedinput" value="<?php echo $resultado[0];?>" placeholder="Nombre de la publicidad">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="precio" class="form-control1" id="focusedinput" value="<?php echo $resultado[3];?>" placeholder="Precio de la publicidad">
		</div>
	</div>

	<div class="form-group">
        <div class="col-sm-8">
	        <label for="exampleInputFile">Ya existe una imagen asociado a esta publicidad
	        <img src="../imagenes/publicidad/<?php echo $resultado[1];?>" height="80" width="80"/> 
	        </label>
	        <label for="exampleInputFile">
	        Si desea remplazarlo, seleccione otra imagen.
	        </label>
	        <input type="file" name="foto" id="exampleInputFile">
	        <p class="help-block">Formatos PNG, JPG, GIF.</p>
	    </div>
    </div>



	<div class="form-group">
		<div class="col-sm-8">
              <label class="control-label normal">Fecha limite de la publicidad</label>
              <input type="date" name="tiempo" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="" value="<?php echo $resultado[2];?>">
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
$precio=$_POST['precio'];
$tiempo= $_POST['tiempo'];

$path1="../imagenes/publicidad/";	 
$nombre_temporal1= $_FILES['foto']['tmp_name'];
$nombre_archivo1 =$_FILES['foto']['name'];
$tipo_archivo1 = $_FILES['foto']['type']; 
$tamano_archivo1 =$_FILES['foto']['size'];


//validadcion N° 01 CARGANUEVA FOTOGRAFICA

if($_FILES['foto']['name']!="")
{
	if (!((strpos($tipo_archivo1, "gif") || strpos($tipo_archivo1, "png") || strpos($tipo_archivo1,"jpeg") || strpos($tipo_archivo1,"jpg")  && ($tamano_archivo1 < 900000)))) 
	{
		echo "La extensión o el tamaño del archivo de IMAGEN no son correctos, se permiten archivos *.gif, *.png o *.jpg, se permiten archivos de 900 Kb como máximo.";
	}
	else
	{
		//realizamos el cambio
		$modificar = mysql_query("UPDATE tpublicidad SET nombre='$nombre',fotoFondo='$nombre_archivo1', tiempo='$tiempo',precio='$precio' WHERE id=$cod",$link);

		$my_error = mysql_error($link);
		if(!empty($my_error))
		{		
			echo "Hubo un error al MODIFICAR los valores. $my_error";
		}
		else
		{
			
			if(is_uploaded_file($nombre_temporal1))
			{
				copy($nombre_temporal1, $path1.$nombre_archivo1);
				//aqui eliminamos el existente
				unlink($path1.$resultado[2]);

				if($resultado[0]!=$nombre)
				{
					rename ($path1.$resultado[0],$path1.$nombre);
				}

				echo "<meta http-equiv ='refresh' content='0;url=index.php?q=".$q."&p=".$p."'>";
			}
			else
			{
				echo "Hubo un error al subir la imagen. $my_error";
			}


		}


	}
}//fin de validadcion
else
{
	//realizamos el cambio
	$modificar = mysql_query("UPDATE tpublicidad SET nombre='$nombre', tiempo='$tiempo',precio='$precio' WHERE id=$cod",$link);


	$my_error = mysql_error($link);
	if(!empty($my_error))
	{		
		echo "Hubo un error al MODIFICAR los valores. $my_error";
	}
	else
	{
		if($resultado[0]!=$nombre)
		{
			rename ($path1.$resultado[0],$path1.$nombre);
		}
		echo "<meta http-equiv ='refresh' content='0;url=index.php?q=".$q."&p=".$p."'>";
	}

}//fin de validadcion





}//fin botom aceptar 

?>







</form>
</div>