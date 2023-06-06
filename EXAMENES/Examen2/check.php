<?php

$correo1 = "12345678Z";
$correo2 = "1234567Z";
$correo3 = "12345678";
$correo4 = "1234546789Z";
$correo5 = "a11234567Z";
$correo6 = "12345678Zz";
$correo7 = "1234567zZ";
$correo8 = "12345678@tetaA";

if (ereg ("^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][a-z|A-Z]$",$correo1))
  {     echo "El correo $correo1 se ACEPTA.<br />";    }
  else     {  echo "El correo $correo1 se RECHAZA.<br />";     }

if (ereg ("^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][a-z|A-Z]$",$correo2))
  { echo "El correo $correo2 se ACEPTA.<br />";    }
  else   {    echo "El correo $correo2 se RECHAZA.<br />";    }
if (ereg ("^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][a-z|A-Z]$",$correo3))
  {     echo "El correo $correo3 se ACEPTA.<br />";    }
  else     {  echo "El correo $correo3 se RECHAZA.<br />";     }

if (ereg ("^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][a-z|A-Z]$",$correo4))
  { echo "El correo $correo4 se ACEPTA.<br />";    }
  else   {    echo "El correo $correo4 se RECHAZA.<br />";    }
if (ereg ("([0-9]{8})[a-z|A-Z]$",$correo5))
  {     echo "El correo $correo5 se ACEPTA.<br />";    }
  else     {  echo "El correo $correo5 se RECHAZA.<br />";     }
if (ereg ("^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][a-z|A-Z]$",$correo6))
  { echo "El correo $correo6 se ACEPTA.<br />";    }
  else   {    echo "El correo $correo6 se RECHAZA.<br />";    }
if (ereg ("^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][a-z|A-Z]$",$correo7))
  {     echo "El correo $correo7 se ACEPTA.<br />";    }
  else     {  echo "El correo $correo7 se RECHAZA.<br />";     }

if (ereg ("^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]@teta[a-z|A-Z]\.[a-z|A-Z]",$correo8))
  { echo "El correo $correo8 se ACEPTA.<br />";    }
 else   {    echo "El correo $correo8 se RECHAZA.<br />";    }


?>