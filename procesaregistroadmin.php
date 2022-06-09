<?php

include("functions/setup.php");



//$sql="insert into propietarios ='".$_POST['frmusuario']."' and clave='".md5($_POST['frmclave'])."' and estado=1";
//echo $sql;
//die; cieere de ejecución hace un stop
$sql="insert into usuario values('".$_POST['rut']."','".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['user']."','".$_POST['fechanac']."','null','".md5($_POST['pass'])."','".$_POST['tipo']."','".$_POST['estado']."','".$_POST['telefono']."','".$_POST['correo']."')";




$sql2="select * from usuario where rut='".$_POST['rut']."' ";



$result=mysqli_query(conexion(),$sql2);
$cont=mysqli_num_rows($result);

if($cont!=0)
{
   header('Location:RegistroAdmin.php?error');
   
}else{
    
    $result=mysqli_query(conexion(),$sql);
    
    header('Location:MenuAdmin.php');
    
}



?>