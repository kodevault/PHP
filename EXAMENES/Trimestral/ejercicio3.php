
<?php

$texto=$_POST['texto'];
$original=$texto;
$texto=strtoupper($texto);
$size=strlen($texto);

$letras= array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$coder= array("z","y","x","w","v","u","t","s","r","q","p","o","n","m","l","k","j","i","h","g","f","e","d","c","b","a");

for ($x=0;$x<$size;$x++)
    {
        for($i=0;$i<=26;$i++)
           {
               if($texto[$x]==$letras[$i])
                  {$texto[$x]=$coder[$i];}
           }
    }

    echo $original;
    echo"<br />";
    echo $texto;

?>

