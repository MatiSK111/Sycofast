
<?php
include("functions/setup.php");
$sql="SELECT * FROM usuario";
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
    <td><?php echo $datos['rut']?></td>
    <td><?php echo $datos['nombres']?></td>
    <td><?php echo $datos['Apellidos']?></td>
    <td><?php echo $datos['fechanac']?></td>
    <td><?php echo $datos['direccion']?></td>
    <td><?php echo $datos['telefono']?></td>
    <td><?php echo $datos['mail']?></td>
    <td><?php if ($datos['estado']==1){
                echo "Activo";
             }else{
               echo "Inactivo";
             }
    
    ?></td>
    <td><a href="Editar_usu.php?Rut=<?php echo $datos['rut']?>"class="btn btn-lg btn-primary3" type="button"><pre>Editar</a></td>
    <td><a href="Eliminar_usu.php?Rut=<?php echo $datos['rut']?>"class="btn btn-lg btn-primary3" type="button"><pre>Eliminar</a></td>
    
    
  </tr>
  
   <?php
   } ?>
</table>
