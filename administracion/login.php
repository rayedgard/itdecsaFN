<?php
	session_start();

	if($_GET['cs']==0)
	{
		session_destroy();
	}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sistema de Administracion de contenidos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>





<?php
include("funciones.php");
include("../conexion.php");
$link = Conectarse();
?>








<body id="login">
  <div class="login-logo">
    <img src="images/logo.png" alt=""/>
  </div>

  <div class="app-cam">
	  <form  action="" method="post" name="login" id="form-login" style="clear: both;">
		<input type="text" class="text" name="text" value="Usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Usuario';}">
		<input type="password" value="Password" name="pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div ><input type="submit"  value="Login" name="acceder"></div>

		<p><a href="#">Olvido su Password ?</a></p>
			


	</form>



  </div>


<div style="text-align: center;">
	

<H1>

    <?php



$nick=$_POST['text'];
$pass=$_POST['pass'];


//aqui encriptamos el nombre
//$nick1= encripta($nick,"rayedgard");




if($_POST['acceder'])
{
	
	if ((!isset($nick) || $nick == '')&&(!isset($pass) || $pass == '')) 
	{
		echo "Faltan completar los campos";
	} 
	else
	{
	$consulta = mysql_query("select pass from admin where user='$nick'",$link);
	$row = mysql_fetch_array($consulta);
			if($row[0]==$pass)
			{

				$consulta2 = mysql_query("select nombre, apellidos from admin where user='$nick' and pass='$pass'",$link);
				$row2 = mysql_fetch_array($consulta2);
				$_SESSION['idname'] = $row2[0].' '.$row2[1];

				echo "<meta http-equiv ='refresh' content ='0;url=admin/'>";	
				
			}
			else 
			{
			   echo "Usuario o Contraseña incorrectos, por favor intentelo de nuevo";
			}	
	}

}

?>
		</H1>


</div>

   <div class="copy_layout login">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://itdecsa.com/" target="_blank">itdecsa</a> </p>
   </div>
</body>
</html>

