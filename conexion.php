﻿<?php
function Conectarse()
{
$db_host="localhost"; // Host al que conectar, habitualmente es el ‘localhost’

$db_nombre="itdecsa1"; // Nombre de la Base de Datos que se desea utilizar

$db_user="root"; // Nombre del usuario con permisos para acceder

$db_pass="mysql"; // Contraseña de dicho usuario


//$db_host="localhost"; // Host al que conectar, habitualmente es el ‘localhost’
//
//$db_nombre="clubdean_andinismo"; // Nombre de la Base de Datos que se desea utilizar
//
//$db_user="clubdean_root"; // Nombre del usuario con permisos para acceder
//
//$db_pass="edgard27"; // Contraseña de dicho usuario

// Ahora estamos realizando una conexión y la llamamos ‘$link’

$link=mysql_connect($db_host, $db_user, $db_pass) or die ("Error conectando a la base de datos.");

// Seleccionamos la base de datos que nos interesa

mysql_select_db($db_nombre ,$link) or die("Error seleccionando la base de datos.");

// Devolvemos $link porque nos hará falta más adelante, cuando queramos hacer consultas.

return $link;

}

