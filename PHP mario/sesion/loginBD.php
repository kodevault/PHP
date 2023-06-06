<!-- encima del buffer y de session  start no puede haber ninguna otra etiqueta -->

<?php
ob_start();        // Abre un buffer que guarda TODO
session_start();   // "inicia sesion"
 
$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "login";

$conexion = mysqli_connect($servidor, $usuario, $pass, $base_datos) or die ("No se ha podido establecer la conexión con la base de datos..");             

$usuario=$_POST["user"]; 
$password=$_POST["pass"];


$sentencia="SELECT * FROM gente where usuario='$usuario' and pass=$password"; 
$res_consulta=mysqli_query($conexion,$sentencia);
$rows=mysqli_affected_rows($conexion);

if ($rows==1)
{       $_SESSION["username"]=$usuario;
	header("Location: bienvenido.php");	
}
	
else 
{	header("Location: nologinnodb.html");
}	
	
mysqli_close($conexion); 

ob_end_flush();
?> 
