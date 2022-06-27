<?php

include("functions/setup.php");

session_start();
//hay que cambiar nombre por usuario en la tabla
$sql="select * from usuario where usuario='".$_POST['user']."' and clave='".md5($_POST['pass'])."' and estado >= 1";
//Cambiar la clave tambien por un varchar de arto pa encriptar
//echo $sql;
//die; cieere de ejecución hace un stop
$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($cont!=0)
{
  $_SESSION['user']=$datos['nombres'];
  $_SESSION['tipousu']=$datos['tipo'];
  $_SESSION['id']=$datos['rut'];
  $_SESSION['foto']=$datos['foto'];
   // ojito aqui que se puede agregar eso
  //  $sql2="UPDATE propietarios SET dispositivo='WEB' WHERE rut='".$_POST['frmrut']."'";
  // $result=mysqli_query(conexion(),$sql2);
    if($datos['tipo']=="Paciente"){
      
      header('Location:Menupaciente.php');
    }
    if($datos['tipo']=="Secretaria"){

      header('Location:MenuSecretaria.php');
    }
    if($datos['tipo']=="Psicologo"){

      header('Location:MenuPsicologo.php');
    }
    if($datos['tipo']=="admin"){

      header('Location:MenuAdmin.php');
    }
    

   
}else{
   header('Location:index.php?error');
}

?>