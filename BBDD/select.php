<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "lolailo";
//Conexión al servidor de bases de datos
$conexion = mysqli_connect($servidor,$usuario, $pass, $base_datos);
if (! $conexion)
echo "No se ha podido establecer la conexión con la base de datos..";
else
{
$sql="SELECT * FROM tablaclientes";
$tabla=mysqli_query($conexion,$sql);
while ($fila=mysqli_fetch_object($tabla))
{
echo "Cliente: ".$fila->Nombre."<br />";
}
}
//Se cierra la conexión cuando terminemos
mysqli_close($conexion);
?>