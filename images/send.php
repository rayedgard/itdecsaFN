<?php session_start();?>

		<?php
	
				echo $_SESSION['nombre'];
				echo $_SESSION['apellido'];

				$enviar=$_POST['enviar'];
				if($enviar)
				{
					
				$nombre = $_SESSION['nombre'];
				$apellido = $_SESSION['apellido'];
				$direccion= $_SESSION['direccion1'];
				$telefono = $_SESSION['telefono'];
				$organizacion = $_SESSION['organizacion'];
				$titulo = $_SESSION['titulo'];
				$correo = $_SESSION['correo'];
				$pais = $_SESSION['pais'];
				$ciudad = $_SESSION['ciudad'];
				$estadoprovincia = $_SESSION['estadoprovincia']; 										
				$fechaPreIns = date('Y-m-d H:i:s', time());
				
			/*

				$nombre1 = $_SESSION['nombre1'];
				$apellido1 = $_SESSION['apellido1'];
				$correo1 = $_SESSION['correo1'];
*/

				include("../conexion.php");
				$link = Conectarse();

				echo $fechaPreIns;

			
				$resultado = mysql_query("INSERT INTO t_participantes (nom_partic,ape_part    ,correo_par ,organizacion   ,titulo   ,telefono   ,pais   ,direccion   ,ciudad   ,provincia ,fechaPreIns) VALUES
				 ('$nombre' ,'$apellido' ,'$correo'  ,'$organizacion','$titulo','$telefono','$pais','$direccion','$ciudad','$estadoprovincia','$fechaPreIns')",$link);

				$my_error = mysql_error($link);

				if(!empty($my_error))
				{		
					echo "Ha habido un error al insertar los valores. $my_error";
				}
				
					


				 
				 
				$destinatario = $correo; 
				$asunto = "Evento";  
				$cuerpo ='

				<html>
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

				<title>Convención Nacional de Centros Binacionales</title>
				</head>

				<body>
				<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
				    <td align="left" valign="middle" bgcolor="#000000" style="background-color:#000000; padding:20px; color:#ffffff;">
				    <div style="font-size:24px;">XXII Convención Nacional de</div>
				    <div style="font-size:32px; color:#ffbe00;">CENTROS BINACIONALES</div>
				    </td>
				    <td width="197" align="right" valign="top"><img src="http://itdecsa.com/convencion/images/cinta.png" width="197" height="182"></td>
				  </tr>
				</table>
				<table width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#971800" style="background-color:#971800;">
				  <tr>
				    <td align="center" valign="top" bgcolor="#ffffff" style="background-color:#ffffff;">
				    <table width="100%" border="0" cellspacing="0" cellpadding="0">
				      <tr>
				        <td align="center" valign="top" bgcolor="#971800" style="background-color:#971800; padding:20px; font-family:Georgia, Times, serif;">
				        <div style="color:#fffbe0; font-size:24px;float:left;">Del 13 al 15 de Julio - 2016  <br>
				          Cusco - Peru</div>
				        
				          <img src="http://itdecsa.com/convencion/images/ipcna.png" style="width:39%;height:39%;float:rigth;">
				        </td>
				      </tr>
				      <tr>
				        <td align="left" valign="top" bgcolor="#e7e0b7" style="background-color:#e7e0b7; padding:20px;"><table width="100%" border="0" cellspacing="0" cellpadding="10" style="margin-bottom:10px;">
				          <tr>
				            <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#53231a;"><div style="font-size:19px;"><b>DATOS PERSONALES</b></div>
				            </td>
				          </tr>         

				          <tr>
				            <td width="216" height="23">NombreS:</td>
				            <td ><font color="#FF6600">'.$nombre.'</font></td>
				          </tr>

				           <tr>
				            <td width="216" height="23">Apellidos:</td>
				            <td ><font color="#FF6600">'.$apellido.'</font></td>
				          </tr>


				        <tr>
				            <td width="216" height="23">Dirección:</td>
				            <td ><font color="#FF6600">'.$direccion.'</font></td>
				          </tr>


				        <tr>
				            <td width="216" height="23">Teléfono:</td>
				            <td ><font color="#FF6600">'.$telefono.'</font></td>
				          </tr>


				         <tr>
				            <td width="216" height="23">Organización:</td>
				            <td ><font color="#FF6600">'.$organizacion.'</font></td>
				          </tr>


				          <tr>
				            <td width="216" height="23">Titulo:</td>
				            <td ><font color="#FF6600">'.$titulo.'</font></td>
				          </tr>


				        <tr>
				            <td width="216" height="23">E-mail:</td>
				            <td ><font color="#FF6600">'.$correo.'</font></td>
				          </tr>


				        <tr>
				            <td width="216" height="23">Pais:</td>
				            <td ><font color="#FF6600">'.$pais.'</font></td>
				          </tr>


				        <tr>
				            <td width="216" height="23">Ciudad:</td>
				            <td ><font color="#FF6600">'.$ciudad.'</font></td>
				          </tr> 


				            <tr>
				            <td width="216" height="23">Estado/Provincia:</td>
				            <td ><font color="#FF6600">'.$estadoprovincia.'</font></td>
				          </tr> 

				          <tr>
				            <td height="23">Fecha que realizo la reservación:</td>
				            <td><font color="#FF6600">'.date('Y-m-d H:i:s', time()).'</font></td>
				          </tr> 

				        </table>
				          <table width="100%" border="0" cellspacing="0" cellpadding="10" style="margin-bottom:10px;">
				            <tr>
				              <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#53231a;">
				              <div style="font-size:19px;">
				                <b>COMUNICADO:</b>
				              </div><br>
				                <div style="text-align:justify;">La Asociación de Centros Binacionales de América Latina , Global Lazos de Estados Unidos, y el Departamento de Estado de Estados Unidos invitan a asistir a ABLA expreso 2016 en Washington , DC ! Este evento único permitirá a los líderes de los centros binacionales para explorar el futuro de la red ABLA al reunirse y aprender de expertos entrenadores , educadores y profesionales de cambio.. <br><br>
				                Usted Debe Pagar el monto de:<br>
				                <p style="font-size:2.1em; color:#53231a;background-color:#fff">$150</p>
				                A la siguiente cuenta:
				                <P style="font-size:2.1em; color:#53231a;background-color:#fff">193&nbsp;- 20617539&nbsp;- 0&nbsp;- 95</P>
				                 Para confirmar su Inscripción para el evento, envie el voucher de pago a la cuenta adjunta y la lista de los participantes al e-mail <P style="font-size:2.1em; color:#53231a;background-color:#fff">info@ipcnacusco.org</P>
				                 </div>
				                 </td>
				            </tr>
				          </table>
				          <table width="100%" border="0" cellspacing="0" cellpadding="10" style="margin-bottom:10px;">
				            <tr>
				              <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000000;"><div>
				                  <br>
				                  <p>Para mayor información, por favor contactar a:</p>
				                <b>Sr. Elmer Pozo</b><br>                
				                <b>Teléfono: </b>(000) 123  4567 </div></td>
				            </tr>
				          </table></td>
				      </tr>
				    </table></td>
				  </tr>
				</table>
				</body>
				</html>


				';



				//para el envío en formato HTML 
				$headers = "MIME-Version: 1.0\r\n"; 
				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

				//dirección del remitente 
				$headers .= "From: Sistema de reservas <info@icpnacusco.org>\r\n"; 

				//dirección de respuesta, si queremos que sea distinta que la del remitente 
				$headers .= "Reply-To:info@icpnacusco.org\r\n"; 

				//ruta del mensaje desde origen a destino 
				$headers .= "Return-path: betto19.32@gmail.com\r\n"; 

				//direcciones que recibián copia 
				//$headers .= "Cc: maria@desarrolloweb.com\r\n"; 

				//direcciones que recibirán copia oculta 
				//$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 

				mail($destinatario,$asunto,$cuerpo,$headers); 
					  
					  
				    echo "<font color='#000000' >Los datos fueron enviados correctamente, en breve nos pondremos en contacto con Ud.</fontt>
					<br>

					";
				}

			
				// Finalmente, destruir la sesión.
				
					session_destroy();
				?>
	<!--<meta http-equiv ='refresh' content='0;url=http://www.itdecsa.com/convencion/'>

			<script type="text/javascript">
					window.location="http://itdecsa.com/convencion/";
				</script> 
-->
