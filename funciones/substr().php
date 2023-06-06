<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$cadena = "Esta cadena tiene muchas letras";
//Devuelve la cadena completa
echo substr($cadena, 0);
echo "<br/>";
//Desde el carácter 12 hasta el final
echo substr($cadena, 12);
echo "<br/>";
//Devuelve 6 caracteres desde el carácter 18
echo substr($cadena, 18,6);
echo "<br/>";
 //Devuelve los 6 últimos caracteres
echo substr($cadena, -6);
echo "<br/>";
//Desde la posición 26, contando desde atrás, 6 caracteres
echo substr($cadena, -26,6);
echo "<br/>";
//Empezando en el carácter 4 y terminando en el 7 desde atrás
echo substr($cadena, 4,-7)."<br/>";

echo substr("Supercalifragilisticoespialidoso",2)."<br/>"; // Devuelve la cadena completa empezando por el carácter 2.
echo substr("Supercalifragilisticoespialidoso",-2)."<br/>"; // Devuelve la cadena completa empezando por el carácter 2, esta vez empezando a contar desde atrás.
echo substr("Supercalifragilisticoespialidoso",1,3)."<br/>"; // El resultado son 3 caracteres empezando desde el carácter  1.
echo substr("Supercalifragilisticoespialidoso",-3,2)."<br/>"; // Dos.caracteres, empezando desde el carácter 3 contando desde la última letra.
echo substr("Supercalifragilisticoespialidoso",2,-1)."<br/>"; // Devuelve un conjunto de caracteres que están desde la  posición 2 a la posición 1 comenzando desde atrás.
echo substr("Supercalifragilisticoespialidoso",-2,-3)."<br/>"; // No tiene aplicación posible.


?>



</body>

</html>
