<?php  // Made in Mario Neko

// Conexion a BBDD
$servidor = "localhost";
$usuario = "root";
$pass = "";
$base_datos = "ejerciciocuentas";
$conexion = mysqli_connect($servidor, $usuario, $pass, $base_datos) or die ("No se ha podido establecer la conexión con la base de datos..");

// Obtencion de datos
$input = "datos.txt";       // GUARDO EL NOMBRE DEL FICHERO EN LA VARIABLE
$lineas = count(file($input));    // cuenta las lineas del fichero $input
$fichero = file("datos.txt");     // abrimos el txt pa leerlo
//$codigo = substr($_FILES["foto"]["name"],0,3);     ESTO SE BORRA SI NO SE ROMPE NADA

// Empieza la magia
for($i=0;$i<$lineas;$i++)        // Creamos un bucle para leer todo el txt
{       $explosion=explode(";" ,trim($fichero[$i],"\n\r"));   // trim elimina el salto de linea
        if($explosion[2]=="s")
        {       $signo="+";}
        else
        {       $signo="-";}

        $sentencia="SELECT * FROM clientes where codigo=".$explosion[0];  // seleccionamos los clientes que concuerdan con nuestro campo clave
        $res_consulta=mysqli_query($conexion,$sentencia);     //lanzamos la consulta y la guardamos
        $rows=mysqli_affected_rows($conexion);  //    cuenta los "rows returned" (workbecnh)
        if ($rows==0)
        {       $insert="INSERT INTO `clientes` (`codigo`, `saldo`) VALUES ($explosion[0], $signo$explosion[1])";
                $res_consulta=mysqli_query($conexion,$insert);
        }
        else
        {       $update="UPDATE `clientes` SET `saldo`=saldo$signo$explosion[1] WHERE `codigo`=$explosion[0]";
                $res_consulta=mysqli_query($conexion,$update);
        }
}

mysqli_close($conexion);

?>