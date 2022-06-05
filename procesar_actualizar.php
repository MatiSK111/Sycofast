<?php
include("functions/setup.php");
$rrr=$_POST["rrut"];
$rut=$_POST["Rut"];
$nombre=$_POST['nom'];
$apellido=$_POST['ape'];
$fecha=$_POST['fech'];
$direcc=$_POST['direc'];
$telef=$_POST['tel'];
$email=$_POST['mail'];
$state=$_POST['estado'];

$sql="UPDATE usuario SET rut='$rut', nombres='$nombre', Apellidos='$apellido', fechanac='$fecha', direccion='$direcc', telefono='$telef', mail='$email', estado='$state' Where rut='$rrr'";

if (mysqli_query(conexion(), $sql)) {
    header("Location: Listar_usu.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error(conexion());
}
mysqli_close(conexion());

?>
