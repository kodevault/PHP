
<?php

$original = 'basura.txt';
$copia = 'basuracopia.txt';

if (!copy($original, $copia))
{       echo "Error al copiar ".$original; }
else
{       echo "Mision Cumplida";}

?>