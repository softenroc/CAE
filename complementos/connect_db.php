<?php

$host ="127.0.0.1";
$user = "root";
$password = "abc.1234";
$db = "CAE";

// Conexion a la base de datos
$connect_db = mysqli_connect($host,$user,$password) or die ("No se ha podido conectar al servidor de Base de Datos");

$db = mysqli_select_db($connect_db,$db) or die ("No se ha podido conectar a la base de datos");
//echo $query = "SELECT ab_tipo_documento,id_tipo_documento from tipo_documento WHERE activo=1";

?>
