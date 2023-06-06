
<?php

$estaciones["INFANTIL"] = array("INF1"=>"TUTINF1", "INF2"=>"TUTINF2", "INF3"=>"TUTINF3");

$estaciones["PRIMARIA"]["CICLO1"] = array("PRIMERO"=>"TUT_PRIM", "SEGUNDO"=>"TUT_SEG");
$estaciones["PRIMARIA"]["CICLO2"] = array("TERCERO"=>"TUT_TERC", "CUARTO"=>"TUT_CUAR");
$estaciones["PRIMARIA"]["CICLO3"] = array("QUINTO"=>"TUT_QUINT", "SEXTO"=>"TUT_SEX");

$estaciones["SECUNDARIA"]["1-ESO"] = "TUTOR 1";
$estaciones["SECUNDARIA"]["2-ESO"] = "TUTOR 2";
$estaciones["SECUNDARIA"]["3-ESO"] = "TUTOR 3";
$estaciones["SECUNDARIA"]["4-ESO"] = "TUTOR 4";

$estaciones["BACHILLERATO"] = array("Septiembre"=>30, "Octubre"=>31, "Noviembre"=>30);

$estaciones["FP"] = array("Diciembre"=>31, "Enero"=>31, "Febrero"=>28);


 echo "Hay 4 estaciones: "."<br />";
 foreach($estaciones as $indice=>$estacion) // Recorremos todo el array $estaciones recogiendo indices y valores ($indice se puede llamar $lolailo, lo importante es ""=>"")
    {
    echo $indice." ";  //  despues de haber recorrido el array, indicamos que solo nos interesa pintar el indice, no el valor que contiene.
    }

 echo "<br /><br />"."Los meses de Otoño son: "."<br />";
 foreach($estaciones["Otoño"] as $indice2=>$mes)
         {
           echo $indice2." ";
         }

 echo "<br /><br />"."Otoño tiene ".$estaciones["Otoño"]["Octubre"]." dias.";

?>

