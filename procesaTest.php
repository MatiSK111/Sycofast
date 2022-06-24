<?php

include("functions/setup.php");

session_start();

//echo $_POST['oc'];
//die;

//echo ' rut:'.$_SESSION['id'];
//echo ' idalter:'.$_POST['eleccion'];
//echo ' test:'.$_GET['t'];
//echo ' idregistro:'.$_GET['reg'];
//echo ' idpregunta:'.$_POST['idpregunta'];
//die;

$idresp='R-'.$_GET['reg'].$_POST['idpregunta'];

//echo $idresp;
//die;



$cons="select * from respuestas where idRespuestas='".$idresp."'";
//echo $cons;
//die;

$resultado=mysqli_query(conexion(), $cons);
$contador=mysqli_num_rows($resultado);

//echo $contador;
//die;

if($contador!=0){
  $upd="UPDATE respuestas SET IdAlternativa =".$_POST['eleccion']." WHERE idRespuestas='".$idresp."'";
  mysqli_query(conexion(), $upd);
  //updatear
 //echo $upd;
 //die;

}else{
  $insert ="insert into respuestas values('".$idresp."',".$_POST['idpregunta'].",".$_POST['eleccion'].",'".$_SESSION['id']."',".$_GET['t'].",'".$_GET['reg']."',1)";
  //echo $insert;
  //die;
  $re=mysqli_query(conexion(), $insert);

//insertar
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


if($_POST['oc']=='s'){

    header('Location:Test.php?reg='.$_GET['reg'].'&t='.$_GET['t'].'&p='.$siguiente);

}
if($_POST['oc']=='a'){

    header('Location:Test.php?reg='.$_GET['reg'].'&t='.$_GET['t'].'&p='.$anterior);
}


?>