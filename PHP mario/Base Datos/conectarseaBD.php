<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "ejerciciocuentas";

$conexion = mysqli_connect($servidor, $usuario, $pass, $base_datos) or die ("No se ha podido establecer la conexión con la base de datos..");   //iniciamos la conexion y si la rechaza sale mensaje de error

echo "Conexion establecida";

mysqli_close ($conexion);   //cerrar conexion
?>