<html>

<head>
    <title>Text Analyzer</title>
</head>

<body>

<form name="formulario" method="POST" action="">


        <p><b>Text Analyzer 0.1</b></p>
        <br>
        <textarea cols="40" rows="5" name="texto">Pegue aqui su texto</textarea>
        <br>
        <br>

        <input type="submit" value="Procesar">
        <input type="Reset" value="Borrar Texto">

    </form>
</body>

</html>

<!-- ####################################################################### -->

<?php

$texto= $_POST['texto'];
$letras_cmp= array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$letras_tot= array("A"=>0, "B"=>0, "C"=>0, "D"=>0, "E"=>0, "F"=>0, "G"=>0, "H"=>0, "I"=>0, "J"=>0, "K"=>0, "L"=>0, "M"=>0, "N"=>0, "O"=>0, "P"=>0, "Q"=>0, "R"=>0, "S"=>0, "T"=>0, "U"=>0, "V"=>0, "W"=>0, "X"=>0, "Y"=>0, "Z"=>0);
$size=strlen($texto);

$original=$texto;
$texto=strtoupper($texto);

for($x=0;$x<=$size;$x++)
{
  for($i=0;$i<=28;$i++)
  {  if($texto[$x]==$letras_cmp[$i])
        {$letras_tot[$texto[$x]]++;}
  }
}

echo "Tu texto tiene ".strlen($texto)." caracteres.<br />";

foreach($letras_tot as $letra=>$cantidad)
    {
    echo $letra." = ".$cantidad."<br />";
    }



?>
