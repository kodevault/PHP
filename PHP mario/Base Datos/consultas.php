<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "ejerciciocuentas";

$conexion = mysqli_connect($servidor, $usuario, $pass, $base_datos) or die ("No se ha podido establecer la conexión con la base de datos..");               // establece una conexion a MySql usando los parametros que le hemos pasado

     	$sentencia="SELECT * FROM clientes";                    // guarda la sentencia en una variable
	$res_consulta=mysqli_query($conexion,$sentencia);       // lanza la sentencia y almacena el resultado, pero no pinta nada

        while ($resultado=mysqli_fetch_object($res_consulta))        // while $fila obtenga un valor...  // fetch object devuelve el resultado de la consulta lanzada con mysqlquery
        {       echo "<b>Codigo: </b>".$resultado->codigo."<b> Saldo: </b>".$resultado->saldo."<br />";   //pintamos el resultado de nuestra consulta, HAY QUE DECIRLE TODOS LOS CAMPOS QUE QUEREMOS PINTAR, UNO A UNO
        }                            //$fila->codigo; es la llamada para pintar el campo codigo de la tabla, habra que indicar uno a uno los campos que queremos pintar


mysqli_close($conexion);

?>