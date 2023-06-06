
<?php

$archivo = 'basura.txt';

if (!rename("basura.txt", "otronombre.txt"))    // NO CONSERVA EL ORIGINAL!!!
{       echo "Error al mover/renombrar $archivo...\n";
}
else
{       echo "Mision Cumplida";}

 //!rename("C:\xampp\htdocs\PHP\ficheros\basura.txt", "C:\xampp\htdocs\PHP\ficheros\otronombre.txt")
 // se pueden poner PATH pero el de arriba no lo coje. por algun motivo esta mal escrito
?>


