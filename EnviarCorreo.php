<?php
include("functions/setup.php");


//hay que cambiar nombre por usuario en la tabla
$sql="select * from usuario where mail='".$_POST['mail']."' and estado >= 1";
//Cambiar la clave tambien por un varchar de arto pa encriptar
echo $sql;
//die; cieere de ejecución hace un stop
$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($cont!=0)
{
    if(mail($_POST['mail'],"Nueva Clave","Su nueva clave de acceso Psicofast es : xhwofT126  Recuerde cambiarla pronto","Encabezado")){

        $sql2="update usuario set clave='5b08267f749a8bf4bab75a95ddbdaff9' where mail='".$_POST['mail']."'";
        mysqli_query(conexion(),$sql2);

        echo"Correo enviado";
        header('Location:Login.php?recuperado');
    }else{
    
        echo"Correo NO enviado";
    }
 
}else{
   header('Location:Recuperar.php?error');
}

?>




