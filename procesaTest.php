<?php

include("functions/setup.php");

session_start();


echo ' rut:'.$_SESSION['id'];
echo ' idalter:'.$_POST['eleccion'];
echo ' test:'.$_GET['t'];
echo ' idregistro:'.$_GET['reg'];
echo ' idpregunta:'.$_POST['idpregunta'];


$cons="select * from respuestas where registro_Test_idtest =".$_GET['t']."and Idpregunta =".$_POST['idpregunta']."and desarrollo ='".$_GET['reg']."'";
echo $cons;
die;
$resultado=mysqli_query(conexion(), $cons);
$contador=mysqli_num_rows($resultado);

if($contador=0){
//insertar
$insert ="insert into respuestas values(null,".$_POST['idpregunta'].",".$_POST['eleccion'].",'".$_SESSION['id']."',".$_GET['t'].",'".$_GET['reg']."',1)";
$re=mysqli_query(conexion(), $insert);
}else{

//updatear
}



$sql="SELECT * FROM pregunta WHERE Test_idtest=".$_GET['t'];
$result=mysqli_query(conexion(), $sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

$final=false;
$siguiente=$_GET['p'];
$anterior=$_GET['p'];



if($anterior>1){
  $anterior=$anterior-1;
}
if($siguiente>=$cont){

  $siguiente=$siguiente;
  $final=true;
}else{

  $siguiente=$siguiente+1;
}


if($accion=='s'){

    header('Location:Test.php?reg='.$_GET['reg'].'&t='.$_GET['t'].'&p='.$siguiente);

}
if($accion=="a"){

    header('Location:Test.php?reg='.$_GET['reg'].'&t='.$_GET['t'].'&p='.$anterior);
}


?>