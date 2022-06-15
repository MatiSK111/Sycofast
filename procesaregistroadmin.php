<?php

include("functions/setup.php");


$rut = $_POST["rut"];
$email = $_POST["correo"];
$user = $_POST["user"];
$pass = md5($_POST['pass']);
$nombre = $_POST["nombres"];
$ape=$_POST["apellidos"];
$fch=$_POST["fechanac"];
$direc=$_POST["direccion"];
$stado=$_POST["estado"];
$tel=$_POST["telefono"];
$tip=$_POST["tipo"];



$sql = "INSERT INTO usuario (rut, usuario, clave, mail, nombres, Apellidos, fechanac, direccion, estado, telefono,tipo,foto) VALUES ('$rut','$user', '$pass', '$email', '$nombre','$ape','$fch', '$direc', '$stado', '$tel','$tip','perfil.jpeg')";

if (mysqli_query(conexion(), $sql)) {
    header("Location: index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error(conexion());
}
mysqli_close(conexion());

?>



