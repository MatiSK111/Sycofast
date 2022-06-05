
<?php
include("functions/setup.php");
$rut=$_GET["Rut"];
$sql="SELECT * FROM usuario WHERE rut='$rut'";
$result=mysqli_query(conexion(), $sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<form action="procesar_actualizar.php" method="POST">
<table>
<tr>
    <th>Rut</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Fecha de nacimiento</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Email</th>
    <th>Estado</th>
   
  </tr>
   <?php
   while($datos=mysqli_fetch_array($result)){
   ?>
    <tr>
    <input type="hidden" value="<?php echo $datos['rut']?>" name=rrut>
    <td><input type="text" value="<?php echo $datos['rut']?>" name=Rut></td>
    <td><input type="text" value="<?php echo $datos['nombre']?>" name=nom></td>
    <td><input type="text" value="<?php echo $datos['Apellidos']?>" name=ape></td>
    <td><input type="text" value="<?php echo $datos['fechanac']?>" name=fech></td>
    <td><input type="text" value="<?php echo $datos['direccion']?>" name=direc></td>
    <td><input type="text" value="<?php echo $datos['telefono']?>" name=tel></td>
    <td><input type="text" value="<?php echo $datos['mail']?>" name=mail></td>
    <td><input type="text" value="<?php echo $datos['estado']?>" name=estado></td>

  </tr>
  
   <?php
   } ?>
</table>
<input type="submit" value="actualizar">
</form>