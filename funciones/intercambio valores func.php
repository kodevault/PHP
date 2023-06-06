<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Hello!</title>
</head>

<body>

<?php
$numero=24;

function uno($valor){
  $sol=$valor*2;
  return $sol;
}
function dos($valor){
  $luna=$valor/2;
  return $luna;
}

echo $numero."<br />";
$alfa=uno($numero);
echo $alfa."<br />";
$beta=dos($alfa);
echo $beta."<br />";


?>

</body>

</html>
