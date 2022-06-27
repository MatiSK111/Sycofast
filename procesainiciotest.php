<?php

include("functions/setup.php");

session_start();
//hay que cambiar nombre por usuario en la tabla
$sql="select * from registro where Usuario_rut='".$_SESSION['id']."' and Test_idtest=".$_GET['t']." and estado >= 1";
//Cambiar la clave tambien por un varchar de arto pa encriptar
//echo $sql;
//die; 
$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);

$idreg=$_SESSION['id'].$_GET['t'].($cont + 1);
//echo $idreg;
$fecha = date('Y-m-d', time());

$sql2="insert into registro values('".$idreg."',NOW(),0,'Resultado por defecto','".$_SESSION['id']."',".$_GET['t'].",2)";
$result2=mysqli_query(conexion(),$sql2);
//echo $sql2;

header('Location:Test.php?t='.$_GET['t'].'&p=1&reg='.$idreg.'&final=false');




?>