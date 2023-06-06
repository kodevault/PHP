
<?php
$nombre_archivo = 'textoejemplo.txt';
$contenido = "Añade esta basura al archivo ";  // .chr(10).chr(13) - para insertar salto de linea y retorno de carro

if (is_writable($nombre_archivo))                // Comprueba que el archivo existe y es escribible.
{   $archivo=fopen($nombre_archivo, 'a');   // abrimos $nombre_archivo en modo de adición, coloca el puntero al final del archivo, el contenido se añadira aqui

    if (fwrite($archivo, $contenido) === FALSE)     // Escribir $contenido a nuestro archivo abierto.
    {   echo "No se puede escribir en el archivo ($nombre_archivo)";
        exit;
    }

    echo "Se añadio: ($contenido) al archivo ($nombre_archivo)";
    fclose($nombre_archivo);
}

else
{   echo "No tiene permiso para modificar el archivo $nombre_archivo o la funcion es incorrecta";
}

?>