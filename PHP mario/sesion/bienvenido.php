<?php
session_start();         // esto siempre arriba del todo, luego metes to la mierda ke kieras pero esto lo primero
?>

<html>
	<body>
	
	<?php
	
	$usuario=$_SESSION["username"];                     
	echo "bienvenido $usuario";
	
	
	?>
	</body>
</html>


		