
<?php

$linea=5;
$borrar="luis";
//$archivo=fopen($nombre_archivo, 'a');
$fichero = file("agenda.txt");    // guarda todo el fichero en un array tomando los saltos de linea como separacion de las posicionnes del array

foreach ($fichero as $num_linea => $linea)       //recorremos el array tomando el numero de campo dentro del array como numero de linea
{
echo "Linea <b>".$num_linea."</b> : ".$linea."<br />\n"; //
}

echo "Que linea quiere borrar?"."<br />";
echo "La 5!"."<br />";
echo $fichero[5]."<br />";

//unset($fichero[$borrar]);
echo $fichero[5];

foreach($delete_val as $key){
        $keyToDelete = array_search($key, $list);
        unset($list[$keyToDelete]);}


?>