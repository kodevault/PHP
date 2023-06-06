<?php

$fichero=$_FILES["fichero1"];
$tamanio=$_POST["tamanio"];
foreach ($_FILES["fichero1"] as $indice => $valor)
{
echo "$indice: $valor<br />";
}
if ($_FILES["fichero1"]["size"]<$tamanio)
{
echo "<br />el fichero tiene un tamaño adecuado";
move_uploaded_file($_FILES["fichero1"]["tmp_name"],$_FILES["fichero1"]["name"]);
}
else
{
echo "<br />el fichero es demasiado grande";
}

?>