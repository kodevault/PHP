<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$palabra="    mostaza        ";
echo("la palabra es $palabra" );
echo "el tamaño de mi frase completa es ".strlen($palabra)."<br/>";
echo "el tamaño de mi frase cortando espacios por la izquierda es ".strlen(ltrim($palabra))."<br/>";
echo "el tamaño de mi frase cortando espacios por la derecha es ".strlen(rtrim($palabra))."<br/>";
echo "el tamaño de mi frase cortando espacios es ".strlen(trim($palabra))."<br/>";
?>

</body>

</html>
