<?php
$correo = "ghgh555@hotmail.com";
$correo0 = "papafrita.unoluis.zapato.@aupex.mantequilla.org";
$correol = "AbCdEfGhI@correo.net";
$correo2 = "ARESluis.cabezas@ncc.aupex.org";
$correo3 = "mantequilla@correo.net";

if (ereg ("[a-z]+[0-9]+@+[hotmail]*\.+(org|com|net)$",$correo))
  {
  echo "El correo $correo se ACEPTA.<br />";
  }
  else
  {
  echo "El correo $correo se RECHAZA.<br />";
  }

if (ereg ("[a-z|\.]+@[a-z|\.]+\.(org|com|net)$",$correo0))
  {
  echo "El correo $correo0 se ACEPTA.<br />";
  }
  else
  {
  echo "El correo $correo0 se RECHAZA.<br />";
  }


if (ereg("[a-z|A-Z]+@[a-z|\.]+\.(org|com|net)$",$correol) )
  {
  echo "El correo $correol se se ACEPTA.<br />";
  }
  else
  {
  echo "El correo $correol se RECHAZA.<br />";
  }

if (ereg("^ARES[a-z|\.]+@[a-z|\.]+\.(org|com|net)$",$correo2))
  {
  echo "El correo $correo2 se ACEPTA.<br />";
  }
  else
  {
  echo "El correo $correo2 se RECHAZA.<br />";
  }

if (ereg("[a-z|A-Z]@correo.net$",$correo3))
  {
  echo "El correo $correo3 se ACEPTA.<br />";
  }
  else
  {
  echo "El correo $correo3 se RECHAZA.<br />";
  }

?>