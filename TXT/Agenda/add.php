<?php


$nuevo=$_POST["nombre"]._.$_POST["tlf"].chr(10).chr(13);
$nombre_archivo = 'agenda.txt';


if (is_writable($nombre_archivo))
{   $archivo=fopen($nombre_archivo, 'a');

    if (fwrite($archivo, $nuevo) === FALSE)
    {   echo "No se puede escribir en el archivo ($nombre_archivo)";
        exit;
    }

    echo "Se añadio: ($nuevo) al archivo ($nombre_archivo)";
    fclose($nombre_archivo);
}

else
{   echo "No tiene permiso para modificar el archivo $nombre_archivo o la funcion es incorrecta";
}

echo "<a href='/php/ficheros/agenda/añadir.html'> <br /><br />Volver</a>" ;
echo "<a href='/php/ficheros/agenda/open.php'> <br />Ver Agenda</a>";

?>