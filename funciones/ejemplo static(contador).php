<?php
function contador()
{
static $contador = 0;
$contador = $contador + 1;
return $contador;
}
for ($x = 1; $x <= 100; $x++)
{
echo contador() ." , ";
}
?>