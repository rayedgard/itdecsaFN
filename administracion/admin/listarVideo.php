

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



//desencriptamos las variables tomadas de la URL
$codigo= desencripta($_GET['cod'],'rayedgard');
$estado= desencripta($_GET['e'],'rayedgard');



if($estado=='2')
	{
//eliminando de la bd 
mysql_query("DELETE FROM tvideos WHERE id='$codigo' ",$link);


$my_error = mysql_error($link);
	}

	if($estado=='1')
	{
mysql_query("UPDATE tvideos SET  estado='1' WHERE id='$codigo'",$link);
$my_error = mysql_error($link);
	}
	
	if($estado=='0')
	{
mysql_query("UPDATE tvideos SET  estado='0' WHERE id='$codigo'",$link);
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





$consulta ="SELECT id,ids,nombre, link, estado FROM tvideos ORDER BY id"; 
$resultado = mysql_query($consulta,$link);

	//nombre del titulo
	$id=array();
	$ids=array();
	$nombre=array();
	$enlace = array();
	$estado = array();
while($row2 = mysql_fetch_array($resultado))
		{
		array_push($id,$row2[0]);
		array_push($ids,$row2[1]);
		array_push($nombre,$row2[2]);
		array_push($enlace,$row2[3]);
		array_push($estado,$row2[4]);
		}
		

?>







				<div class="divContenido">
					<table >
						<thead>
							<tr >
								<th width="10">#</th>
								<th>Nombres</th>
								<th width="200">Sistema asociado</th>
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
								//realizamos las consultas individuales
								$consulta1 = mysql_query("SELECT nombre FROM tsistemas WHERE id='$ids[$j]'",$link);
								$resultado1 = mysql_fetch_array($consulta1);
							?>
							<tr <?php if($cont%2==0){echo 'class="intermedio"';}   ?> >
								<td><?php echo $cont;?></td>
								<td ><?php echo $nombre[$j];?></td>
								<td ><?php echo $resultado1[0];?></td>
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
									 <a href="#" onclick="javascript:direc('index.php?p=<?php echo $p;?>&q=<?php echo $q?>&e=<?php echo encripta("2","rayedgard");?>&cod=<?php echo encripta($id[$j],"rayedgard");?>','<?php echo $nombre[$j];?>');"  title="ELIMINAR" ><img src="../images/eliminar.png"></a>
    	
								</td>
							</tr>
							<?php 
							$cont++;
							} 
							?>


						</tbody>
					</table>
				</div>


