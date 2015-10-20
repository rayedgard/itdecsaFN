<?php
session_start();
if(isset($_SESSION['idname']))
{  $nombre = $_SESSION['idname']; }
else
{ echo "<meta http-equiv ='refresh' content ='0;url=../login.php?cs=1'>"; } 
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>



















<!----extensiones para el editor--->

<!-- place in header of your html document -->
<!-- TinyMCE -->
<script type="text/javascript" src="../../tiny_mce/tiny_mce.js"></script>
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
    theme_advanced_width : 800,


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







<body>







<?php
include("../../conexion.php");
include("../funciones.php");
$link = Conectarse();
//$td=$_GET['td'];

$p = desencripta($_GET['p'],"rayedgard");
$q = desencripta($_GET['q'],"rayedgard");

  if($p==1)
  {$titulo="Gestión de Perfiles";}
  if($p==2)
  {$titulo="Gestión de Uduarios";}
  if($p==3)
  {$titulo="Gestión de Categorias";}
  if($p==4)
  {$titulo="Gestión de Productos";}
  if($p==5)
  {$titulo="Gestión de Perfiles del Personal";}
  if($p==6)
  {$titulo="Gestión de Paquetes Turísticos";}
  if($p==7)
  {$titulo="Gestión de Destinos Turísticos";}
  if($p==8)
  {$titulo="Gestion de Fotografias";}
  if($p==9)
  {$titulo="Gestión de Eventos";}

 
  $p1=encripta('1','rayedgard');
  $p2=encripta('2','rayedgard');
  $p3=encripta('3','rayedgard');
  $p4=encripta('4','rayedgard');
  $p5=encripta('5','rayedgard');
  $p6=encripta('6','rayedgard');
  $p7=encripta('7','rayedgard');


?>














<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
              
                <a class="navbar-brand" href="index.html">Sistema de Administración de Contenidos</a>
            </div>
            <!-- /.navbar-header -->
        



      <!--CODIGO PARA EL MENU DEL USUARIO-->
      <ul class="nav navbar-nav navbar-right">

			    <li class="dropdown">


	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../images/1.png" alt=""/><span class="badge">9</span></a>
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
                    <a href="../login.php?cs=0"><i class="fa fa-lock"></i> Cerrar Sesión </a>
                  </li>	
	        		</ul>
	        </li>
			</ul>
      <!--FIN MENU USUARIO-->






            <!--MENU DEL SISTEMA-->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Perfiles del sistema<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php?p=<?php echo encripta('1','rayedgard');?>&q=<?php echo encripta('1','rayedgard');?> " >Perfiles (Trabajadores)</a>
                                </li>
                                <li>
                                    <a href="index.php?p=<?php echo encripta('2','rayedgard');?>&q=<?php echo encripta('1','rayedgard');?> "> Usuarios</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="graphs.html">Categorias</a>
                                </li>
                                <li>
                                    <a href="typography.html">Productos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Multimedia<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inbox.html">Videos</a>
                                </li>
                                <li>
                                    <a href="compose.html">Fotos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Servicios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="forms.html">Software</a>
                                </li>
                                <li>
                                    <a href="validation.html">Tecnologias</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="basic_tables.html">Basic Tables</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Eventos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.html">Noticias</a>
                                </li>
                                <li>
                                    <a href="login.html">Eventos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 
      <!--FI MENU-->




  

    <div>

    <a href="#" class="cabecera" ><?php echo $titulo; ?></a>
         <div class="boton">
         <div>
          <a href="index.php?p=<?php echo encripta($p,'rayedgard');?>&q=<?php echo encripta('2','rayedgard');?>">
         <img src="../images/nuevo.png" width="40" />
         </a> </div>
         <div>
         <a href="index.php?p=<?php echo encripta($p,'rayedgard');?>&q=<?php echo encripta('2','rayedgard');?>">Nuevo</a></div>

     </div>
     <div class="boton">
         <div><a href="index.php?p=<?php echo encripta($p,'rayedgard');?>&q=<?php echo encripta('1','rayedgard');?>">
         <img src="../images/listar.png" width="40" /></a> </div>
         <div><a href="index.php?p=<?php echo encripta($p,'rayedgard');?>&q=<?php echo encripta('1','rayedgard');?>">Listar</a></div>

     </div>
    </div>
 
 







<?php  // codigo para insertar las paginas 



//para los mensajes de eliminacion
  $s = $_GET['s'];


  $e = $_GET['e'];
 
 
  if ($p) {
    switch ($p) {
      //
      case 1:
        if($q==1)
        {
            include("listarPerfiles.php");
        }
        if($q==2)
        {
              include("nuevoPerfil.php");
        }
        if($q==3)
        {
            include("modificaPerfil.php");
        }
          if($q==4)
        {
            include("mensaje.php");
        }
      break;
      case 2:
        if($q==1)
        {
            include("listarNoticias.php");
        }
        if($q==2)
        {
            include("nuevoNoticias.php");
        }
        if($q==3)
        {
            include("modificarNoticias.php");
        }
         if($q==4)
        {
            include("mensaje.php");
        }
      
      break;
      case 3:
        if($q==1)
        {
        include("listarPublicidad.php");
        }
        if($q==2)
        {
          include("nuevoPublicidad.php");
        }
        if($q==3)
        {
            include("modificarPublicidad.php");
        }
          if($q==4)
        {
            include("mensaje.php");
        }
       
      
      break;
      case 4:
        if($q==1)
        {
        include("listarUsuarios.php");
        }
        if($q==2)
        {
        
        include("nuevoUsuario.php");
        }
        if($q==3)
        {
            include("modificarUsuario.php");
        }
          if($q==4)
        {
            include("mensaje1.php");
        }
      
      break;
      
     case 5:
        if($q==1)
        {
        include("listarPerfil.php");
        }
        if($q==2)
        {
        
        include("nuevoPerfil.php");
        }
        if($q==3)
        {
            include("modificarPerfil.php");
        }
          if($q==4)
        {
            include("mensaje.php");
        }
      
      break;
      case 6:
        if($q==1)
        {
        include("listarPaquete.php");
        }
        if($q==2)
        {
        
        include("nuevoPaquete.php");
        }
        if($q==3)
        {
            include("modificarPaquete.php");
        }
         if($q==4)
        {
            include("mensaje.php");
        }
       
      
      break;
      case 7:
        if($q==1)
        {
        include("listarDestino.php");
        }
        if($q==2)
        {
        
        include("nuevoDestino.php");
        }
        if($q==3)
        {
            include("modificarDestino.php");
        }
         if($q==4)
        {
            include("mensaje.php");
        }
      break;
          
      case 8:
        if($q==1)
        {
        include("listarCategoriaFotos.php");
        }
        if($q==2)
        {
        
        include("nuevoCategoriaFotos.php");
        }
        if($q==3)
        {
            include("modificarCategoriaFotos.php");
        }
        if($q==4)
        {
            include("mensaje.php");
        }
      
      break;  
      
       case 9:
        if($q==1)
        {
        include("listarEvento.php");
        }
        if($q==2)
        {
        
        include("nuevoEvento.php");
        }
        if($q==3)
        {
            include("modificarEvento.php");
        }
        if($q==4)
        {
            include("mensaje.php");
        }
      
      break;  
      
  
    } 
  }
  else
  {
    include("portada.php");
  }
  //fin codigo para isertar paginas
?>









  
  <div class="copy_layout">
      <p>Copyright © 2015 ITDECSA. All Rights Reserved | Design by <a href="http://itdecsa.com/" target="_blank">itdecsa.com</a> </p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
