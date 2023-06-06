<?php

session_start();                                    // Recupera la sesion actual o crea una nueva, debe incluirse al principio de todas las paginas, antes de cualquier otra etiqueta

echo "Identificador de sesion: ".session_id();      // pinta el identificador de esta session
//echo "Nombre de sesion: ".session_name();         // pinta el nombre de esta session, normalmente "PHPSESSID"

session_destroy();                  				// Rompe la sesion
echo "<br/>Aqui no deberia aparecer nada--> ".session_id();    	// comprobamos que la ha destruido


// VARIABLES DE SESION
$identificador="name+pass+timestamp";
$actualizar="nuevo valor";

$_SESSION["nuevasesion"]=$identificador;           	// asigna un valor a la sesion, podemos crear cuantos campos queramos
echo "<br/>".$_SESSION["nuevasesion"];                  // pinta la sesion

$_SESSION["nuevasesion"]=$actualizar;              	// actualiza la sesion
echo "<br/>".$_SESSION["nuevasesion"]."<br/>";          // pintamos el nuevo valor de la session

unset($_SESSION["nuevasesion"]);                	// Rompe variables de sesion
echo "<b>DEBAJO DEBE APARECER UN ERROR</b>";
echo "Aqui no deberia aparecer nada--> ".$_SESSION["nuevasesion"];


?>
