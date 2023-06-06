
<html>
        <form name="formulario" method="POST" action="">
            <p>Introduce tu correo: <input name="correo" type="text" id="nombre"></p>
            <input type="submit" name="Submit" value="Enviar">
            <input type="reset" name="Submit" value="Borrar">
        </form>
</html>

<!-- ####################################################################### -->

<?php

    $correo = $_POST['correo'];

        if (ereg ("^[a-z|A-Z][0-9][a-z|A-Z]+(.prueba.)(net|org|es)$",$correo))
             {echo $correo." El formato es correcto"; }
        else { echo $correo." No cumple el formato, intentelo de nuevo."; }



?>