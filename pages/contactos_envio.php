<?php
session_start();

include("../conexion.php");
$link = Conectarse();

		$enviar=$_POST['enviar'];
			if($enviar)
			{

				$_SESSION['nombre'] =  $_POST['nombre_c'];
				$_SESSION['apellido'] = $_POST['correo_c'];
				$_SESSION['correo'] = $_POST['asunto_c'];
				$_SESSION['correo'] = $_POST['texto_c'];

				$destinatario = $correo; 
				$asunto = "Evento";  
				$cuerpo ='

				  
   		 <html xmlns="http://www.w3.org/1999/xhtml">
		    <head>
		      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		      <title>[SUBJECT]</title>
		      <style type="text/css">
		      body {
		       padding-top: 0 !important;
		       padding-bottom: 0 !important;
		       padding-top: 0 !important;
		       padding-bottom: 0 !important;
		       margin:0 !important;
		       width: 100% !important;
		       -webkit-text-size-adjust: 100% !important;
		       -ms-text-size-adjust: 100% !important;
		       -webkit-font-smoothing: antialiased !important;
		     }
		     .tableContent img {
		       border: 0 !important;
		       display: block !important;
		       outline: none !important;
		     }
		     a{
		      color:#382F2E;
		    }

		    p, h1{
		      color:#382F2E;
		      margin:0;
		    }
		 p{
		      text-align:left;
		      color:#999999;
		      font-size:14px;
		      font-weight:normal;
		      line-height:19px;
		    }

		    a.link1{
		      color:#382F2E;
		    }
		    a.link2{
		      font-size:16px;
		      text-decoration:none;
		      color:#ffffff;
		    }

		    h2{
		      text-align:left;
		       color:#222222; 
		       font-size:19px;
		      font-weight:normal;
		    }
		    div,p,ul,h1{
		      margin:0;
		    }

		    .bgBody{
		      background: #ffffff;
		    }
		    .bgItem{
		      background: #ffffff;
		    }

		    </style>
		<script type="colorScheme" class="swatch active">
		{
		    "name":"Default",
		    "bgBody":"ffffff",
		    "link":"382F2E",
		    "color":"999999",
		    "bgItem":"ffffff",
		    "title":"222222"
		}
		</script>
		  </head>
		  <body paddingwidth="0" paddingheight="0"   style="padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;" offset="0" toppadding="0" leftpadding="0">
		    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent bgBody" align="center"  style="font-family:Helvetica, Arial,serif;">

		      
		      <tr><td height="35"></td></tr>

		      <tr>
		        <td>
		          <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="bgItem">
		            <tr>
		              <td width="40"></td>
		              <td width="520">
		                <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">

		<!-- =============================== Header ====================================== -->           
		                  

		                  <tr><td height="75"></td></tr>
		<!-- =============================== Body ====================================== -->

		                  <tr>
		                    <td class="movableContentContainer" valign="top">

		                      <div lass="movableContent">
		                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
		                          <tr>
		                            <td valign="top" align="center">
		                              <div class="contentEditableContainer contentTextEditable">
		                                <div class="contentEditable">
		                                  <p style="text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;">Bienvenido a <span style="color:#FF5000;">[ITDECSA]</span></p>
		                                </div>
		                              </div>
		                            </td>
		                          </tr>
		                        </table>
		                      </div>

		                      <div lass="movableContent">
		                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
		                          <tr>
		                            <td valign="top" align="center">
		                              <div class="contentEditableContainer contentImageEditable">
		                                <div class="contentEditable">
		                                  <img src="images/line.png" width="251" height="43" alt="" data-default="placeholder" data-max-width="560">
		                                </div>
		                              </div>
		                            </td>
		                          </tr>
		                        </table>
		                      </div>

		                      <div class="movableContent">
		                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
		                          <tr><td height="55"></td></tr>
		                          <tr>
		                            <td align="left">
		                              <div class="contentEditableContainer contentTextEditable">
		                                <div class="contentEditable" align="center">
		                                  <h2 >Gracias por subscribirte a nuestra oferta</h2>
		                                </div>
		                              </div>
		                            </td>
		                          </tr>

		                          <tr><td height="15"> </td></tr>

		                          <tr>
		                            <td align="left">
		                              <div class="contentEditableContainer contentTextEditable">
		                                <div class="contentEditable" align="center">
		                                  <p  style="text-align:left;color:#999999;font-size:14px;font-weight:normal;line-height:19px;">
		                                    Recibiste este email porque te suscribiste a nuestro descuento por la compra de un software empresarial, y a la suscripción de nuestro newsletter de ITDECSA</br>

		                                    Si no deseas recibir mas nuestros mensajes. puedes darte de baja en este <a target="_blank" class="link1" href="#">link</a> para cancelar tu suscripcion.
		                                    <br>

		                                    <br>
		                                    Ofertas validas hasta agotar existencias. Las promociones clasificadas como "Solo Hoy" son validas, exclusivamente, para la fecha de envio del correo. En caso de que haya diferencias entre los precios o descripción de este correo y de la pagina, seran validos aquellos que tengan el codigo asignado.
		                                    <br>
		                                    <br>
		                                    Saludos,
		                                    <br>
		                                    <span style="color:#222222;">Cliente Nro1</span>
		                                  </p>
		                                </div>
		                              </div>
		                            </td>
		                          </tr>

		                          <tr><td height="55"></td></tr>

		                          <tr>
		                            <td align="center">
		                              <table>
		                                <tr>
		                                  <td align="center" bgcolor="#FF5000" style="background:#FF5000; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">
		                                    <div class="contentEditableContainer contentTextEditable">
		                                      <div class="contentEditable" align="center">
		                                        <a target="_blank" href="#" class="link2" style="color:#ffffff;">Su Código es:F456GRT1</a>
		                                      </div>
		                                    </div>
		                                  </td>
		                                </tr>
		                              </table>
		                            </td>
		                          </tr>
		                          <tr><td height="20"></td></tr>
		                        </table>
		                      </div>

		                      <div lass="movableContent">
		                        <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
		                          <tr><td height="65"></td></tr>
		                          <tr><td  style="border-bottom:1px solid #DDDDDD;"></td></tr>

		                          <tr><td height="25"></td></tr>

		                          <tr>
		                            <td>
		                              <table width="520" border="0" cellspacing="0" cellpadding="0" align="center">
		                                <tr>
		                                  <td valign="top" align="left" width="370">
		                                    <div class="contentEditableContainer contentTextEditable">
		                                      <div class="contentEditable" align="center">
		                                        <p  style="text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;">
		                                          <span style="font-weight:bold;">[ITDECSA]</span>
		                                          <br>
		                                          [Informes@itdecsa.com]
		                                          <br>
		                                          <a target="_blank" href="[FORWARD]">Terminos</a>&nbsp&nbsp
		                                          <a target="_blank" href="[UNSUBSCRIBE]" class="link1" class="color:#382F2E;">Politica de Privacidad</a>&nbsp&nbsp
		                                          
		                                          <a target="_blank" class="link1" class="color:#382F2E;" href="[SHOWEMAIL]">Envios y Devoluciones</a>&nbsp&nbsp
		                                            <a target="_blank" href="[UNSUBSCRIBE]" class="link1" class="color:#382F2E;">Contactanos</a>&nbsp&nbsp
		                                             <a target="_blank" href="[UNSUBSCRIBE]" class="link1" class="color:#382F2E;">Ayuda</a>
		                                          <br>
		                                        </p>
		                                      </div>
		                                    </div>
		                                  </td>

		                                  <td width="30"></td>

		                                  <td valign="top" width="52">
		                                    <div class="contentEditableContainer contentFacebookEditable">
		                                      <div class="contentEditable">
		                                        <a target="_blank" href="https://www.facebook.com/Informatic-Technology-Development-Corporation-SA-157087624356221/?fref=ts"><img src="images/facebook.png" width="52" height="53" alt="facebook icon" data-default="placeholder" data-max-width="52" data-customIcon="true"></a>
		                                      </div>
		                                    </div>
		                                  </td>

		                                  <td width="16"></td>

		                                  <td valign="top" width="52">
		                                    <div class="contentEditableContainer contentTwitterEditable">
		                                      <div class="contentEditable">
		                                        <a target="_blank" href="#"><img src="images/twitter.png" width="52" height="53" alt="twitter icon" data-default="placeholder" data-max-width="52" data-customIcon="true"></a>
		                                      </div>
		                                    </div>
		                                  </td>
		                                </tr>
		                              </table>
		                            </td>
		                          </tr>
		                        </table>
		                      </div>

		                    </td>
		                  </tr>

		                  

		<!-- =============================== footer ====================================== -->
		                  


		                </table>
		              </td>
		              <td width="40"></td>
		            </tr>
		          </table>
		        </td>
		      </tr>

		      <tr><td height="88"></td></tr>


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


<!DOCTYPE HTML>
<html>
<head>
<title>ITDECSA - Informatic Technology Development Corporation S.A. </title>
  
 <meta http-equiv ='refresh' content='12;url=contactos.php'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../js/wow.min.js"></script>
<link href="../css/animate.css" rel='stylesheet' type='text/css' />

<!---/End-Animation---->
</head>
	<body style="background-color:#000000;" > 







	</body>
</html> 