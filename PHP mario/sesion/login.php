<!-- 	
	CREATE DATABASE almaredpc;
	USE almaredpc;
					
	CREATE TABLE `usuarios` (
	 	 `codigo` INT(5) NOT NULL AUTO_INCREMENT,
	 	 `usuario` VARCHAR(20) NOT NULL,
	 	 `password` VARCHAR(10) NOT NULL,
	  	  PRIMARY KEY  (`codigo`)
	);
			
	Grant all privileges on almaredpc.* to 'Alfredo'@'localhost' identified by'123456';		
-->

 <?php

$usuario=$_POST["user"]; 
$password=$_POST["pass"];

// "define" crea constantes que son como variables pero permanecen inalteradas.
define('HOST', 'localhost');
define('DATABASE', 'almaredpc');
define('DB_USER', $usuario);
define('DB_PASS', $password);


$con = mysql_connect(HOST, DB_USER, DB_PASS);
mysql_select_db(DATABASE,$con);

?> 
