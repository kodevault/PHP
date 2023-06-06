<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Mario R procesado</title>
</head>

<body>

<?php

$verbo = $_POST['verbo'];
$raiz = substr($verbo,0,-2);
$infinitivo = substr($verbo,-2,1);
$raiz = strtoupper($raiz);

// CONJUGACIONES
$infinitivoAR = 'ar';
$gerundioAR = 'ando';
$participioAR ='ado';
$infinitivoER = 'er';
$infinitivoIR = 'ir';
$gerundioEIR = 'iendo';
$participioEIR ='ido';
// ------------------


if($infinitivo=='a'){
         $inf = strtoupper($infinitivoAR);
         $ger = strtoupper($gerundioAR);
         $part = strtoupper($participioAR);
         $conj = 1;
}
elseif($infinitivo=='e'){
         $inf = strtoupper($infinitivoER);
         $ger = strtoupper($gerundioEIR);
         $part = strtoupper($participioEIR);
         $conj = 2;
}
elseif($infinitivo=='i'){
         $inf = strtoupper($infinitivoIR);
         $ger = strtoupper($gerundioEIR);
         $part = strtoupper($participioEIR);
         $conj = 3;
}

echo "<table border=1 width=600px height=75px>
        <tr>
          <td><b>&nbsp;Verbo</b></td>
          <td><b>&nbsp;Gerundio</b></td>
          <td><b>&nbsp;Participio</b></td>
          <td><b>&nbsp;Conjugacion</b></td>
        </tr>
        <tr>
          <td>&nbsp;".$raiz."<b>".$inf."</b>"."</td>
          <td>&nbsp;".$raiz."<b>".$ger."<b>"."</td>
          <td>&nbsp;".$raiz."<b>".$part."<b>"."</td>
          <td>&nbsp;".$conj."ºconjugacion</td>
        </tr>
      </table>"

?>

</body>

</html>
