<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "lolailo";
//Conexi�n al servidor de bases de datos
$conexion = mysqli_connect($servidor,$usuario, $pass, $base_datos);
if (! $conexion)
echo "No se ha podido establecer la conexi�n con la base de datos..";
else
{
$sql="SELECT * FROM tablaclientes";
$tabla=mysqli_query($conexion,$sql);
while ($fila=mysqli_fetch_object($tabla))
{
echo "Cliente: ".$fila->Nombre."<br />";
}
}
//Se cierra la conexi�n cuando terminemos
mysqli_close($conexion);
?>