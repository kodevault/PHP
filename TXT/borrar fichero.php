
<?php

$archivo = 'basuracopia.txt';

if (!@unlink($archivo))
{       echo "Error al borrar $archivo...\n";
}
else
{       echo "Mision Cumplida";}


?>