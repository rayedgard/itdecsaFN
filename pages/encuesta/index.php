<?php require('_drawrating.php'); ?>
<head>
<script type="text/javascript" language="javascript" src="js/behavior.js"></script>
<script type="text/javascript" language="javascript" src="js/rating.js"></script>
<link rel="stylesheet" type="text/css" href="css/rating.css" />
<style>
	h1,h2,h3{clear:both}
	pre{border:1px solid #ccc;background:#dadada;font-family:monospace;font-size:11px;color:#333;padding:10px;clear:both}
</style>
</head>
<body>
<?

?>
<h1>Sistema de Votaci&oacute;n</h1>
<p>Suponiendo que mostramos el registro 1 de la base de datos.</p>
<pre>$ide=1;</pre>

<?php
include('../../conexion.php');
$link = conectarse();
$consulta = mysql_query("SELECT id FROM galeria",$link); 
$resultado = mysql_fetch_array($consulta);


$ide=1; ?>


<div id='container'><?=rating_bar($ide,5,$valor)?></div>




</body>