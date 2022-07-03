<?php

include("functions/setup.php");

session_start();
//Estado -> 0 no enviado 1 enviado , 2 completado
$sql="select * from cola where idtest=".$_GET['te']." and rutpaciente='".$_GET['Rut']."' and estado = 1";
//echo $sql;
//die;

$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);


$sql2="select * from registro where Usuario_rut='".$_GET['Rut']."' and Test_idtest=".$_GET['te']." and estado >= 1";

//echo $sql;
//die; 
$result2=mysqli_query(conexion(),$sql2);
$cont2=mysqli_num_rows($result2);

$idreg=$_GET['Rut'].$_GET['te'].($cont2 + 1);

if($cont!=0)
{
      header('Location:Enviartest.php?error');
   
}else{

    $sql3="insert into cola values(0,'".$_GET['Rut']."',".$_GET['te'].",NOW(),1, '".$idreg."')";
    //echo $sql2;
    //die;
    $result3=mysqli_query(conexion(),$sql3);

    $sql4="insert into registro values('".$idreg."',NOW(),0,'defecto','".$_GET['Rut']."',".$_GET['te'].",1)";
      $result4=mysqli_query(conexion(),$sql4);

   header('Location:Enviartest.php?correcto');
}

?>