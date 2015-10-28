

<script>
//recojemos los parametros d=url enviado del boton elimiar y u=el nombre del elemento que se eliminara
//DONDE u=DIRECCION DEL PAQUETE
//      d=NOMBRE DEL PAQUETE
function direc(d,u)
{
var r=confirm("Esta seguro que desea eliminar este elemnto: "+u+" !!");
if (r==true)
  {
	window.location=d;//redirige la url
  }
else
  {
	window.location=document.location.href;//reguresa a la misma direccion
  }
}
</script>








<!--CODIGO PARA ELIMINAR, DESHABILITAR Y HABILITAR-->
 <?php
$p= $_GET['p'];
$q= $_GET['q'];
$nn= desencripta($_GET['nn'],"rayedgard");



//desencriptamos las variables tomadas de la URL
$codigo= desencripta($_GET['cod'],'rayedgard');
$estado= desencripta($_GET['e'],'rayedgard');

// consulta para onçbtener el nombre de la imagen para eliminar la imagen de la carpeta contenedora
$consulta = mysql_query("select fotoFondo from tpublicidad where id='$codigo'",$link);
$imagen= mysql_fetch_array($consulta);

if($estado=='2')
	{
//eliminando de la bd 

mysql_query("DELETE FROM tpublicidad WHERE id='$codigo' ",$link);
	unlink("../imagenes/publicidad/".$imagen[0]);//para eliminar la imagen 

mysql_query("DELETE FROM tfotoPublicidad WHERE idpublicidad='$codigo' ",$link);

$my_error = mysql_error($link);



//CODIGO PRA ELIMINAR LA CARPETA DOND ESE ALMACENAN TODAS LAS FOTOS

	function rmdirr($dirname)
	{ // Simple delete for a file 
		if (is_file($dirname)) 
		{
			return unlink($dirname);
		} // Loop through the folder 
		$dir = dir($dirname); 
		while (false !== $entry = $dir->read()) 
		{ // Skip pointers 
			if ($entry == '.' || $entry == '..') 
			{ 
			continue; 
			} // Deep delete directories 
			if (is_dir("$dirname/$entry")) 
			{ 
				rmdirr("$dirname/$entry"); 
			} 
			else 
			{ 
			unlink("$dirname/$entry"); 
			} 
		} // Clean up 
		$dir->close();
		return rmdir($dirname);
	}

	rmdirr("../imagenes/publicidad/".$nn);//sabiendo que estos son los parametros para tu caso  


//FIN ELIMINACION DE CARPETA DE FOTOS




	}
	if($estado=='1')
	{
		
		mysql_query("UPDATE tpublicidad SET  estado='1' WHERE id='$codigo'",$link);
		$my_error = mysql_error($link);
	}
	
	if($estado=='0')
	{
		mysql_query("UPDATE tpublicidad SET  estado='1' ",$link);
		mysql_query("UPDATE tpublicidad SET  estado='0' WHERE id='$codigo'",$link);
		$my_error = mysql_error($link);
	}

if(!empty($my_error ))
		{		
			$q4 =encripta('4','rayedgard');
			echo "<meta http-equiv ='refresh' content='0;url=index.php?&p=".$p."&q=".$q4."'>";
		}
	

?>
<!--FIN CODIGO ELIMNAR...-->











<?php





$consulta ="SELECT id,nombre, tiempo, estado FROM tpublicidad ORDER BY id"; 
$resultado = mysql_query($consulta,$link);

	//nombre del titulo
	$id=array();
	$nombre=array();
	$tiempo = array();
	$estado = array();
while($row2 = mysql_fetch_array($resultado))
		{
		array_push($id,$row2[0]);
		array_push($nombre,$row2[1]);
		array_push($tiempo,$row2[2]);
		array_push($estado,$row2[3]);
		}
		

?>







				<div class="divContenido">
					<table >
						<thead>
							<tr >
								<th width="10">#</th>
								<th>Nombres</th>
								<th>Fecha limite de la Promoción</th>
								<th width="32">         </th>
								<th width="60">Estado</th>
								<th width="70">Modificar</th>
								<th width="60">Activar</th>
								<th width="70">Desactivar</th>
								<th width="70">Eliminar</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$cont=1;
							for($j=0;$j<count($nombre);$j++)
							{
							?>
							<tr <?php if($cont%2==0){echo 'class="intermedio"';}   ?> >
								<td><?php echo $cont;?></td>
								<td ><?php echo $nombre[$j];?></td>
								<td ><?php echo $tiempo[$j];?></td>
								<td  <?php if($estado[$j]==1){echo 'class="minimo"';} ?>></td>
								<td ><?php if($estado[$j]==1){echo 'Desactivo';} if($estado[$j]==0){echo 'Activo';} ?></td>
								<td>
									<a href="index.php?p=<?php echo $p;?>&q=<?php echo encripta('3','rayedgard');?>&cod=<?php echo encripta($id[$j],'rayedgard');?>" title="MODIFICAR"><img src="../images/modificar.png"></a>
    							</td>
								<td>
									<a href="index.php?p=<?php echo $p;?>&q=<?php echo $q?>&e=<?php echo encripta('0','rayedgard');?>&cod=<?php echo encripta($id[$j],'rayedgard');?>" title="ACTIVAR"><img src="../images/activar.png"></a>
								</td>
								<td>
									 <a href="index.php?p=<?php echo $p;?>&q=<?php echo $q?>&e=<?php echo encripta('1','rayedgard');?>&cod=<?php echo encripta($id[$j],'rayedgard');?>" title="DESACTIVAR"><img src="../images/elimina.png"></a>
     							</td>
     							<td>
									 <a href="#" onclick="javascript:direc('index.php?p=<?php echo $p;?>&q=<?php echo $q?>&e=<?php echo encripta("2","rayedgard");?>&cod=<?php echo encripta($id[$j],"rayedgard");?>&nn=<?php echo encripta($nombre[$j],"rayedgard");?>','<?php echo $nombre[$j];?>');"  title="ELIMINAR" ><img src="../images/eliminar.png"></a>
    	
								</td>
							</tr>
							<?php 
							$cont++;
							} 
							?>


						</tbody>
					</table>
				</div>


