

<?php
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
	      	<option value="0">Seleccione el sistema al cual pertenece el Video</option>
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
			<input type="text" name="nombre" class="form-control1" id="focusedinput" placeholder="Titulo de Noticia">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-8 ">
			<label for="exampleInputFile">Observe el ejemplo de como copiar el enlace, recuerde que debe copiar el argumento despues de V=
	        <img src="../images/youtube.png" /> 
	        </label>
			<input type="text" name="link" class="form-control1" id="focusedinput" placeholder="Ingrese el link del video (Fuente youtube)">
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
$sistema=$_POST['sistema'];
$enlace= $_POST['link'];



$consulta = mysql_query("INSERT INTO tvideos (ids,nombre,link) VALUES ('$sistema','$nombre','$enlace')",$link);

$my_error = mysql_error($link);

	if(!empty($my_error))
	{		
		echo "Ha habido un error al insertar los valores. $my_error";
	}
	 else 
	{
		
		echo "<meta http-equiv ='refresh' content='0;url=index.php?p=$p&q=$q>'";
	
	} 


} 

?>







</form>
</div>