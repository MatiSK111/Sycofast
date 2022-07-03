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
//obtenemoe el puntaje de la alternativa elegida
$sql="select * from alternativa where idAlternativas=".$_POST['eleccion']."";
$r=mysqli_query(conexion(), $sql);
$d=mysqli_fetch_array($r);

$puntaje=$d['puntaje'];


if($contador!=0){
  $upd="UPDATE respuestas SET IdAlternativa =".$_POST['eleccion']." WHERE idRespuestas='".$idresp."'";
  mysqli_query(conexion(), $upd);

  $up2="UPDATE respuestas SET  estado =".$puntaje." WHERE idRespuestas='".$idresp."'";
  mysqli_query(conexion(), $up2);
  //updatear
 //echo $upd;
 //die;

}else{
  $insert ="insert into respuestas values('".$idresp."',".$_POST['idpregunta'].",".$_POST['eleccion'].",'".$_SESSION['id']."',".$_GET['t'].",'".$_GET['reg']."',".$puntaje.")";
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

if($_POST['oc']=='f'){

  $upd2="UPDATE cola SET estado = 2 WHERE idtest=".$_GET['t']." and rutpaciente ='".$_SESSION['id']."'";
  mysqli_query(conexion(), $upd2);

  //
  $total=0;
  $sqt="select * from respuestas where desarrollo='".$_GET['reg']."'";
  $rt=mysqli_query(conexion(), $sqt);

  //Contamos el puntaje respuesta por respuesta
  while($dt=mysqli_fetch_array($rt)){

    $total=$total+$dt['estado'];

  }
$grado="Grado de Depresion : ";

if($total<=13){$grado=$grado."Minimo";}
if($total>=14 && $total<=18){$grado=$grado."Leve";}
if($total>=19 && $total<=27){$grado=$grado."Moderado";}
if($total>=28 && $total<=63){$grado=$grado."Grave";}


  //registramos el total del puntaje
  $upd3="UPDATE registro SET puntaje = ".$total." WHERE idregistro='".$_GET['reg']."'";
  mysqli_query(conexion(), $upd3);

  $upd4="UPDATE registro SET estado = 2 WHERE idregistro='".$_GET['reg']."'";
  mysqli_query(conexion(), $upd4);

  $upd5="UPDATE registro SET Resultado ='".$grado."' WHERE idregistro='".$_GET['reg']."'";
  mysqli_query(conexion(), $upd5);
  


  header('Location:Menupaciente.php?test=fin');
}


?>