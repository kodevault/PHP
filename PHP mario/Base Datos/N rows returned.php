<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "ejerciciocuentas";

$conexion = mysqli_connect($servidor, $usuario, $pass, $base_datos);             // establece una conexion a MySql usando los parametros que le hemos pasado

if (! $conexion)
{       echo "No se ha podido establecer la conexi�n con la base de datos..";}

else
{
        $sentencia="SELECT * FROM clientes";                    // guardamos la consulta en una variable
        $res_consulta=mysqli_query($conexion,$sentencia);       // lanza la sentencia
        $rows=mysqli_affected_rows($conexion);                  // devuelve el numero de lineas afectadas por la sentencia
        echo "N�mero de registros: ".$rows;             // pintamos el numero de lineas
}

mysqli_close($conexion);

?>