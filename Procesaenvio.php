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

if($cont!=0)
{
      header('Location:Enviartest.php?error');
   
}else{

    $sql2="insert into cola values(0,'".$_GET['Rut']."',".$_GET['te'].",NOW(),1)";
    //echo $sql2;
    //die;
    $result2=mysqli_query(conexion(),$sql2);

   header('Location:Enviartest.php?correcto');
}

?>