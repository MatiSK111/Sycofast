
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
<!--Validaciones-->
<script src="Javascript/validar_actualizar.js"></script>

</head>
<form name="form1" action="procesar_actualizar.php" method="POST" enctype="multipart/form-data">
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
    <input type="hidden" value="<?php echo $datos['rut']?>" name=rrut id="rrut" >
    <td><input type="text" value="<?php echo $datos['rut']?>" name=Rut id="Rut"></td>
    <td><input type="text" value="<?php echo $datos['nombre']?>" name=nom id="nom"></td>
    <td><input type="text" value="<?php echo $datos['Apellidos']?>" name=ape id="ape"></td>
    <td><input type="text" value="<?php echo $datos['fechanac']?>" name=fech id="fech"></td>
    <td><input type="text" value="<?php echo $datos['direccion']?>" name=direc id="direc"></td>
    <td><input type="text" value="<?php echo $datos['telefono']?>" name=tel id="tel"></td>
    <td><input type="text" value="<?php echo $datos['mail']?>" name=mail id="mail"></td>
    <td><input type="text" value="<?php echo $datos['estado']?>" name=estado id="estado"></td>

  </tr>
  
   <?php
   } ?>
</table>
<input type="submit" value="actualizar">
</form>