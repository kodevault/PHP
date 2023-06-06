<!-- encima del buffer y de session  start no puede haber ninguna otra etiqueta -->

<?php
ob_start();        // Abre un buffer que guarda TODO
session_start();   // "inicia sesion"
 
 $registrados = array("almudena", "mario", "edu", "pagani");
 $shadow = array(12345678, 12345, 123, 123456);

 $usuario=$_POST["user"]; 
 $password=$_POST["pass"];

 	if (in_array ($usuario , $registrados) && in_array ($password , $shadow))  // comprueba que existen user y pass, No comprueba si la pass corresponde al user
	{	$_SESSION["username"]=$usuario;
		header("Location: bienvenido.php");
	}

 	else
	{	header("Location: nologinnodb.html");
	}

ob_end_flush();
?> 
