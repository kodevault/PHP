

<?php

$escuelaidiomas1["basico"] = array("ingles"=>14, "frances"=>8, "aleman"=>1, "ruso"=>3);
$escuelaidiomas1["medio"] = array("ingles"=>19, "frances"=>7, "aleman"=>6, "ruso"=>2);
$escuelaidiomas1["avanzado"] = array("ingles"=>13, "frances"=>6, "aleman"=>2, "ruso"=>1);

$escuelaidiomas2["basico"] = array("ingles"=>6, "frances"=>10, "aleman"=>7, "ruso"=>9);
$escuelaidiomas2["medio"] = array("ingles"=>5, "frances"=>12, "aleman"=>4, "ruso"=>6);
$escuelaidiomas2["avanzado"] = array("ingles"=>4, "frances"=>5, "aleman"=>6, "ruso"=>3);


function muestraescuela($escuela)
        { echo "Los alumnos matriculados en la escuela 1 son: <br />";
                foreach($escuela as $nivel=>$basura)
                foreach($escuela[$nivel] as $idioma=>$alumnos)
                {   echo $nivel."  ".$idioma."  ".$alumnos."<br />"; }
        }


muestraescuela($escuelaidiomas1);
echo "<br />";
muestraescuela($escuelaidiomas2);


?>
