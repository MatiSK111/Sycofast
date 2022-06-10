<?php

include("functions/setup.php");



//$sql="insert into propietarios ='".$_POST['frmusuario']."' and clave='".md5($_POST['frmclave'])."' and estado=1";
//echo $sql;
//die; cieere de ejecución hace un stop
//$sql="insert into usuario values('".$_POST['rut']."','".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['user']."','".$_POST['fechanac']."','".$_POST['direccion']."','".md5($_POST['pass'])."','paciente',".$_POST['estado'].",'".$_POST['telefono']."','".$_POST['correo']."')";

//$sql2="select * from usuario where rut='".$_POST['rut']."' ";
//echo $sql;
//die;

//$result=mysqli_query(conexion(),$sql2);
//$cont=mysqli_num_rows($result);

//if($cont!=0)
//{
//   header('Location:Registro.php?error');
   
//}else{
    
//    $result=mysqli_query(conexion(),$sql);
    
   // header('Location:index.php');
    
//}
$rut = $_POST["rut"];
$email = $_POST["correo"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$nombre = $_POST["nombres"];
$ape=$_POST["apellidos"];
$fch=$_POST["fechanac"];
$direc=$_POST["direccion"];
$stado=$_POST["estado"];
$tel=$_POST["telefono"];



$sql = "INSERT INTO usuario (rut, usuario, clave, mail, nombres, Apellidos, fechanac, direccion, estado, telefono) VALUES ('$rut','$user', '$pass', '$email', '$nombre','$ape','$fch', '$direc', '$stado', '$tel')";

if (mysqli_query(conexion(), $sql)) {
    header("Location: index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error(conexion());
}
mysqli_close(conexion());

?>

