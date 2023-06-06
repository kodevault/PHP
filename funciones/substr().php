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
//Desde el car�cter 12 hasta el final
echo substr($cadena, 12);
echo "<br/>";
//Devuelve 6 caracteres desde el car�cter 18
echo substr($cadena, 18,6);
echo "<br/>";
 //Devuelve los 6 �ltimos caracteres
echo substr($cadena, -6);
echo "<br/>";
//Desde la posici�n 26, contando desde atr�s, 6 caracteres
echo substr($cadena, -26,6);
echo "<br/>";
//Empezando en el car�cter 4 y terminando en el 7 desde atr�s
echo substr($cadena, 4,-7)."<br/>";

echo substr("Supercalifragilisticoespialidoso",2)."<br/>"; // Devuelve la cadena completa empezando por el car�cter 2.
echo substr("Supercalifragilisticoespialidoso",-2)."<br/>"; // Devuelve la cadena completa empezando por el car�cter 2, esta vez empezando a contar desde atr�s.
echo substr("Supercalifragilisticoespialidoso",1,3)."<br/>"; // El resultado son 3 caracteres empezando desde el car�cter  1.
echo substr("Supercalifragilisticoespialidoso",-3,2)."<br/>"; // Dos.caracteres, empezando desde el car�cter 3 contando desde la �ltima letra.
echo substr("Supercalifragilisticoespialidoso",2,-1)."<br/>"; // Devuelve un conjunto de caracteres que est�n desde la  posici�n 2 a la posici�n 1 comenzando desde atr�s.
echo substr("Supercalifragilisticoespialidoso",-2,-3)."<br/>"; // No tiene aplicaci�n posible.


?>



</body>

</html>
