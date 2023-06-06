<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<?php

$fichero=fopen("agenda.txt","r");

while (!feof($fichero))
{
  $texto=fgets($fichero);
  $textoconbr=nl2br($texto);   

  echo $textoconbr;

}
fclose($fichero);
?>

