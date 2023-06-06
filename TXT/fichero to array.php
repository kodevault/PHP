
<?php

$fichero = file("basura.txt");    // guarda todo el fichero en un array tomando los saltos de linea como separacion de las posicionnes del array

foreach ($fichero as $num_linea => $linea)       //recorremos el array tomando el numero de campo dentro del array como numero de linea
{
echo "Linea <b>".$num_linea."</b> : ".$linea."<br />\n"; //
}

?>