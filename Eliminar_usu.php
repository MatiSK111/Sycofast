<?php
include("functions/setup.php");

$rut=$_GET["Rut"];



$sql="DELETE FROM usuario Where rut='$rut' ";
                                

if (mysqli_query(conexion(), $sql)) {
    header("Location: Listar_usu.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error(conexion());
}
mysqli_close(conexion());
?>