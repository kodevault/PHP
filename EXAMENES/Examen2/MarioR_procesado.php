<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Mario Rueda</title>
</head>

<body>

<?php

    $dni = $_POST['dni'];

        if (ereg ("^([0-9]{8})[a-z|A-Z]$",$dni))
        {}
        else { exit("Formato Incorrecto, intentelo de nuevo."); }

    $nums = substr($dni,0,-1);
    $letra = substr($dni,-1,1);
    $letra = strtoupper($letra);
    $letras = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");

    $resto=$nums%23;

   if ($letra==$letras[$resto])
   {echo "El DNI ".$dni." es correcto." ;}

   elseif ($letra!=$letras[$resto])
   {echo "Eres un mentiroso, al DNI ".$nums." le corresponde la letra: ".$letras[$resto];}

?>

</body>

</html>
