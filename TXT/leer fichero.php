<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<?php

$fichero=fopen("basura.txt","r");

while (!feof($fichero))         // miestras no llegue al final del fichero...
{
  $texto=fgets($fichero);       // saca el texto del fichero
  $textoconbr=nl2br($texto);   // traduce el codigo de "nueva linea" al "<br>"

  echo $textoconbr;

}
fclose($fichero);
?>

