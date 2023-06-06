
<?php

$numero=$_POST['numero'];
$original=$numero;
$x=0;

if (ereg ("^[0-9]+$",$numero))
  {}
else { exit("Formato Incorrecto,  <a href='formulario1.html'>intentelo de nuevo.</a>" ); }

for($i=$numero;$i>=1;$i=$numero)
{
  if($numero%2==1)
  {
    $numero--;
    $resto[$x]=1;
    $numero=$numero/2;
  }
  elseif($numero%2==0)
  {
    $resto[$x]=0;
    $numero=$numero/2;
  }
  $x++;
}

echo "El numero ".$original." convertido a binario es: ";
for($i=$x;$i>=0;$i--)
{echo $resto[$i];}

?>
