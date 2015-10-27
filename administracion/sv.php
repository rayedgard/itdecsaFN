<?php
session_start();



include("../conexion.php");
include("funciones.php");
$link = Conectarse();



$correo=$_POST['correo'];
$pass=$_POST['pass'];


//aqui encriptamos el nombre
//$nick1= encripta($nick,"rayedgard");

if($correo!="" and $pass!="")
{
  $consulta = mysql_query("select pass from tcliente where correo='$correo' and estado=0",$link);
  $row = mysql_fetch_array($consulta);
      if($row[0]==$pass)
      {

        $consulta2 = mysql_query("select nombres from tcliente where correo='$correo' and pass='$pass'",$link);
        $row2 = mysql_fetch_array($consulta2);
        $_SESSION['clientename'] = $row2[0];

        $nombre  =$_SESSION['clientename'];

             
      }
      else 
      {
         echo "Error de autentificación";
            echo "<meta http-equiv ='refresh' content ='0;url=http://www.google.com/search'>";
      } 

}
else 
{
   echo "<meta http-equiv ='refresh' content ='0;url=http://www.google.com/search'>";
} 
 
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Sistema de Administración de Contenidos</title>
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



















<!----extensiones para el editor--->

<!-- place in header of your html document -->
<!-- TinyMCE -->
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
  tinyMCE.init({
    // General options
    mode : "textareas",
    theme : "advanced",
    plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks,jfilebrowser",

    // Theme options
    theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect,jfilebrowser",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "bottom",
    theme_advanced_resizing : true,
  


    // Example content CSS (should be your site CSS)
    content_css : "css/content.css",

    // Drop lists for link/image/media/template dialogs
    template_external_list_url : "lists/template_list.js",
    external_link_list_url : "lists/link_list.js",
    external_image_list_url : "lists/image_list.js",
    media_external_list_url : "lists/media_list.js",

    // Style formats
    style_formats : [
      {title : 'Bold text', inline : 'b'},
      {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
      {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
      {title : 'Example 1', inline : 'span', classes : 'example1'},
      {title : 'Example 2', inline : 'span', classes : 'example2'},
      {title : 'Table styles'},
      {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
    ],

    // Replace values for the template plugin
    template_replace_values : {
      username : "Some User",
      staffid : "991234"
    }
  });
</script>
<!-- /TinyMCE -->



<!------fin extensiones del editor-------->









</head>







<body style="margin-top:5px; ">




<?php


$p = desencripta($_GET['p'],"rayedgard");
$q = desencripta($_GET['q'],"rayedgard");



?>




<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" >


            <!--//////////////ENCABEZADO Y TITULO/////////////////-->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Sistema de Administración de Contenidos</a>
            </div>
            <!-- /.navbar-header -->
        


      <!--////////////////////////CODIGO PARA EL MENU DEL USUARIO///////////////////-->
      <!--CODIGO PARA EL MENU DEL USUARIO-->
      <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">

	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png" alt=""/><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						      <li class="dropdown-menu-header text-center">
							    <strong>
                                    <?php echo $nombre; ?>
                               
                   </strong>
    					 	  </li>
    						  <li class="m_2">
                    <a href="#"><i class="fa fa-user">  </i> Mi Perfil</a>
                  </li>
    						  <li class="m_2">
                    <a href="#"><i class="fa fa-wrench"></i> Settings</a>
                  </li>
    						  <li class="m_2">
                    <a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a>
                  </li>
    						  <li class="m_2">
                    <a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a>
                  </li>
    						  <li class="divider"></li>

    						  <li class="m_2">
                    <a href="#"><i class="fa fa-shield"></i> Lock Profile</a>
                  </li>
    						  <li class="m_2">
                    <a href="sv.php?cs=0"><i class="fa fa-lock"></i> Cerrar Sesión </a>
                  </li>	
	        		</ul>
	        </li>
			</ul>
      <!--FIN MENU USUARIO-->



  




</nav>










<div class="contenedorweb">



</div>











  
                <div class="copy_layout">
                    <p>Copyright © 2015 ITDECSA. All Rights Reserved | Design by <a href="http://itdecsa.com/" target="_blank">itdecsa.com</a> </p>
                </div>





<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>











</body>
</html>
