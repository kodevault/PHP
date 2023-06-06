<!-- Made in Mario Neko -->

<html>

  <head>
         <title> Polar Star </title>
  </head>

  <body>

      <form name="formulario" method="POST" action="">
              <br />
              <center><p>Tamaño de la estrella:<br /><input name="size" type="text"></p>
              <input type="submit" value="Enviar"></center>
      </form>

  </body>

</html>

<?php


$size=$_POST['size'];
$A=0;
$B=$size-1;
$C=$size-1;

$espacio="&nbsp;&nbsp;";
$punto="&nbsp;*&nbsp;";

echo'<center><table><tr><td><br />';

// *** TOP ***
  for($x=0;$x<$size;$x++)
  {
      for($i=0;$i<$A;$i++)
      {echo $espacio;}
      echo $punto;
      $A++;
      for($i=0;$i<$B;$i++)
      {echo $espacio;}
      echo $punto;
      $B--;
      for($i=0;$i<$C;$i++)
      {echo $espacio;}
      echo $punto;
      $C--;
      echo"<br />";
  }

// *** MID ***
  for($i=0;$i<=$size+1;$i++)
          {echo $punto;}
  echo"<br />";
    $A--; $B++; $C++;

// *** BOT ***
  for($x=0;$x<$size;$x++)
  {
      for($i=0;$i<$A;$i++)
      {echo $espacio;}
      echo $punto;
      $A--;
      for($i=0;$i<$B;$i++)
      {echo $espacio;}
      echo $punto;
      $B++;
      for($i=0;$i<$C;$i++)
      {echo $espacio;}
      echo $punto;
      $C++;
      echo"<br />";
  }

echo'</td></tr></table></center>';

?>
