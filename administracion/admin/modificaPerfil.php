<?php
 $cod=desencripta($_GET['cod'],"rayedgard");
 // consulta a la base de datos
$consulta = mysql_query("SELECT nombre,cargo,correo,face,google,lin,imagen,descripcion,file,estado FROM tperfil WHERE id='$cod'",$link);
$resultado = mysql_fetch_array($consulta);

?>


<div class="bs-example" data-example-id="form-validation-states-with-icons">
<form class="form-horizontal" method="post" enctype="multipart/form-data" name="form2" >

	<div class="form-group">
		<div class="col-sm-8">
			<input type="text" name="nombre" class="form-control1" id="focusedinput" value="<?php echo $resultado[0];?>" placeholder="Nombres y apellidos">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="cargo" class="form-control1" id="focusedinput" value="<?php echo $resultado[1];?>" placeholder="Cargo del perfil">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="correo" class="form-control1" id="focusedinput" value="<?php echo $resultado[2];?>" placeholder="E-mail Institucional">
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="face" class="form-control1" id="focusedinput" value="<?php echo $resultado[3];?>" placeholder="URL de su cuenta de FACEBOOK">
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="google" class="form-control1" id="focusedinput" value="<?php echo $resultado[4];?>" placeholder="URL de su cuenta de GOOGLE+">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="lin" class="form-control1" id="focusedinput" value="<?php echo $resultado[5];?>" placeholder="URL de su cuenta de LINKEDIN">
		</div>
	</div>


 	<div class="form-group">
        <div class="col-sm-8">
	        <label for="exampleInputFile">Ya existe una imagen asociado a este perfil
	        <img src="../imagenes/perfil/<?php echo $resultado[6];?>" height="80" width="80"/> 
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
	     	<textarea name="descripcion"  onFocus="if(this.value == 'Texto aqui...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Texto aqui...';}"><?php echo $resultado[7]; ?></textarea>
		</div>
	</div>

	<div class="form-group">
        <div class="col-sm-8">
        	<label for="exampleInputFile">
        	Ya existe un archivo asociado a este perfil, de nombre: <?php echo $resultado[8];?>
        	</label>
	        <label for="exampleInputFile">Si desea remplazarlo, seleccione otro Archivo</label>
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
$face= $_POST['face'];
$google= $_POST['google'];
$lin= $_POST['lin'];
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

//validaciones para cada archivo y fotografia

//validadcion N° 01 CARGA NUEVO ARCHIVO Y NUEVA FOTOGRAFICA

if($_FILES['foto']['name']!="" && $_FILES['file']['name']!="")
{
	if (!((strpos($tipo_archivo1, "gif") || strpos($tipo_archivo1, "png") || strpos($tipo_archivo1,"jpeg") || strpos($tipo_archivo1,"jpg")  && ($tamano_archivo1 < 900000)))) 
	{
		echo "La extensión o el tamaño del archivo de IMAGEN no son correctos, se permiten archivos *.gif, *.png o *.jpg, se permiten archivos de 900 Kb como máximo.";
	}
	else
	{
		//realizamos el cambio
		$modificar = mysql_query("UPDATE tperfil SET nombre='$nombre',cargo='$cargo',correo ='$correo',face ='$face',google ='$google',lin ='$lin',imagen='$nombre_archivo1', descripcion='$descripcion', file='$nombre_archivo2' WHERE id=$cod",$link);

		$my_error = mysql_error($link);
		if(!empty($my_error))
		{		
			echo "Hubo un error al MODIFICAR los valores. $my_error";
		}
		else
		{
			$subio=0;//para validar si subio o no el archivo
			//Aqui subimos la imagen 
			if(is_uploaded_file($nombre_temporal1))
			{
				copy($nombre_temporal1, $path1.$nombre_archivo1);
				//aqui eliminamos el existente
				unlink("../imagenes/perfil/".$resultado[3]);
				$subio++;
			}
			//Aqui subimos el archivo 
			if(is_uploaded_file($nombre_temporal2))
			{
				copy($nombre_temporal2, $path1.$nombre_archivo2);
				//aqui eliminamos el existente
				unlink("../imagenes/perfil/".$resultado[5]);
				$subio++;
			}

			//VALIDAMOS TODO
			if($subio==1)
			{
				echo "Hubo un error al subir la imagen o archvo. $my_error";
			}
			if($subio==0)
			{
				echo "Hubo un error al subir la imagen y archvo. $my_error";
			}

			if($subio==2)
			{
				echo "<meta http-equiv ='refresh' content='0;url=index.php?q=".$q."&p=".$p."'>";
			}

		}


	}
}//fin de validadcion

//validadcion N° 02 CARGANUEVA FOTOGRAFICA

if($_FILES['foto']['name']!="")
{
	if (!((strpos($tipo_archivo1, "gif") || strpos($tipo_archivo1, "png") || strpos($tipo_archivo1,"jpeg") || strpos($tipo_archivo1,"jpg")  && ($tamano_archivo1 < 900000)))) 
	{
		echo "La extensión o el tamaño del archivo de IMAGEN no son correctos, se permiten archivos *.gif, *.png o *.jpg, se permiten archivos de 900 Kb como máximo.";
	}
	else
	{
		//realizamos el cambio
		$modificar = mysql_query("UPDATE tperfil SET nombre='$nombre',cargo='$cargo',correo ='$correo',face ='$face',google ='$google',lin ='$lin',imagen='$nombre_archivo1', descripcion='$descripcion' WHERE id=$cod",$link);

		$my_error = mysql_error($link);
		if(!empty($my_error))
		{		
			echo "Hubo un error al MODIFICAR los valores. $my_error";
		}
		else
		{
			$subio=0;//para validar si subio o no el archivo
			//Aqui subimos la imagen 
			if(is_uploaded_file($nombre_temporal1))
			{
				copy($nombre_temporal1, $path1.$nombre_archivo1);
				//aqui eliminamos el existente
				unlink($path1.$resultado[3]);
				$subio++;
			}
			
			//VALIDAMOS TODO
			if($subio==0)
			{
				echo "Hubo un error al subir la imagen. $my_error";
			}

			if($subio==1)
			{
				echo "<meta http-equiv ='refresh' content='0;url=index.php?q=".$q."&p=".$p."'>";
			}

		}


	}
}//fin de validadcion

//validadcion N° 02 CARGANUEVA FOTOGRAFICA

if($_FILES['file']['name']!="")
{
	//realizamos el cambio
	$modificar = mysql_query("UPDATE tperfil SET nombre='$nombre',cargo='$cargo',correo ='$correo',face ='$face',google ='$google',lin ='$lin', descripcion='$descripcion', file='$nombre_archivo2' WHERE id=$cod",$link);

	$my_error = mysql_error($link);
	if(!empty($my_error))
	{		
		echo "Hubo un error al MODIFICAR los valores. $my_error";
	}
	else
	{
		$subio=0;//para validar si subio o no el archivo
		//Aqui subimos el archivo
		if(is_uploaded_file($nombre_temporal2))
		{
			copy($nombre_temporal2, $path1.$nombre_archivo2);
			//aqui eliminamos el existente
			unlink("../imagenes/perfil/".$resultado[5]);
			$subio++;
		}
		
		//VALIDAMOS TODO
		if($subio==0)
		{
			echo "Hubo un error al subir El archivo. $my_error";
		}

		if($subio==1)
		{
			echo "<meta http-equiv ='refresh' content='0;url=index.php?q=".$q."&p=".$p."'>";
		}

	}

}//fin de validadcion


//validadcion N° 02 CARGANUEVA FOTOGRAFICA

if($_FILES['foto']['name']=="" && $_FILES['file']['name']=="")
{
	//realizamos el cambio
	$modificar = mysql_query("UPDATE tperfil SET nombre='$nombre',cargo='$cargo',correo ='$correo',face ='$face',google ='$google',lin ='$lin', descripcion='$descripcion' WHERE id=$cod",$link);

	$my_error = mysql_error($link);
	if(!empty($my_error))
	{		
		echo "Hubo un error al MODIFICAR los valores. $my_error";
	}
	else
	{
		
		echo "<meta http-equiv ='refresh' content='0;url=index.php?q=".$q."&p=".$p."'>";
	

	}

}//fin de validadcion




}//fin botom aceptar 

?>







</form>
</div>