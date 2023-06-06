<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "ejerciciocuentas";

$conexion = mysqli_connect($servidor, $usuario, $pass, $base_datos);             // establece una conexion a MySql usando los parametros que le hemos pasado

if (! $conexion)
{       echo "No se ha podido establecer la conexión con la base de datos..";}

else
{       $explosion=003; $signo="-";  $cant=999;
        $insert="INSERT INTO `clientes` (`codigo`, `saldo`) VALUES ($explosion, $signo$cant)";
        $res_consulta=mysqli_query($conexion,$insert);

        $sentencia="SELECT * FROM clientes";                    // guarda la sentencia en una variable
        $res_consulta=mysqli_query($conexion,$sentencia);       // lanza la sentencia y almacena el resultado, pero no pinta nada

        while ($fila=mysqli_fetch_object($res_consulta))
        {       echo "<b>Codigo: </b>".$fila->codigo."<b> Saldo: </b>".$fila->saldo."<br />";   //pintamos el resultado de nuestra consulta, linea a linea
        }                            //$fila->codigo; es la llamada para pintar el campo codigo de la tabla, habra que indicar uno a uno los campos que queremos pintar
}

mysqli_close($conexion);

?>