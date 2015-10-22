<?php
 $cod=desencripta($_GET['cod'],"rayedgard");
 // consulta a la base de datos
$consulta = mysql_query("SELECT ids,nombre,link FROM tvideos WHERE id='$cod'",$link);
$resultado = mysql_fetch_array($consulta);

//CONSULTA PARA obtener el nombre del sistema
$consulta1 = mysql_query("SELECT id, nombre FROM tsistemas WHERE id='$resultado[0]'",$link);
$resultado1 = mysql_fetch_array($consulta1);

//consulta para obtener la lista de sistema para asociarlos a los videos
$consultas ="SELECT id, nombre FROM tsistemas ORDER BY nombre"; 
$resultados = mysql_query($consultas,$link);

	//nombre del titulo
	$ids=array();
	$nombres=array();
while($row2 = mysql_fetch_array($resultados))
		{
		array_push($ids,$row2[0]);
		array_push($nombres,$row2[1]);
		}
?>




<div class="bs-example" data-example-id="form-validation-states-with-icons">
<form class="form-horizontal" method="post" enctype="multipart/form-data" name="form2" >



 	<div class="form-group">
 	  <div class="col-sm-8">
	      <select name="sistema" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required="eee">
	      	<option value="<?php echo $resultado1[0]; ?>"><?php echo $resultado1[1]; ?></option>
	        <?php
	        	for($j=0;$j<count($nombres);$j++)
	        	{
	         ?>

	        <option value="<?php echo $ids[$j]?>"><?php echo $nombres[$j]?></option>

	        <?php }?>
	      </select>
      </div>
    </div>



	<div class="form-group">
		<div class="col-sm-8">
			<input type="text" name="nombre" class="form-control1" id="focusedinput" value="<?php echo $resultado[1];?>" placeholder="Titulo de Noticia">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<input type="text" name="link" class="form-control1" id="focusedinput" value="<?php echo $resultado[2];?>" placeholder="Ingrese el link de la noticia (Fuente)">
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

$sistema= $_POST['sistema'];
$nombre= $_POST['nombre'];
$enlace=$_POST['link'];


	//realizamos el cambio
	$modificar = mysql_query("UPDATE tvideos SET ids='$sistema', nombre='$nombre', link='$enlace' WHERE id=$cod",$link);


	$my_error = mysql_error($link);
	if(!empty($my_error))
	{		
		echo "Hubo un error al MODIFICAR los valores. $my_error";
	}
	else
	{
		
		echo "<meta http-equiv ='refresh' content='0;url=index.php?q=".$q."&p=".$p."'>";
	}





}//fin botom aceptar 

?>







</form>
</div>