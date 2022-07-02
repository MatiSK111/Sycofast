<?php
include("functions/setup.php");


//hay que cambiar nombre por usuario en la tabla
$sql="select * from usuario where mail='".$_POST['mail']."' and estado >= 1";
//Cambiar la clave tambien por un varchar de arto pa encriptar
//echo $sql;
//die; cieere de ejecución hace un stop
$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: video-g6swmAP8X5VG4jCi.mp4
$clave = substr(str_shuffle($permitted_chars), 0, 10);



$message  = "<html><body>";
   
$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
$message .= "<tr><td>";
   
$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
    
$message .= "<thead>
  <tr height='80'>
  <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >Psicofast</th>
  </tr>
             </thead>";
    
$message .= "<tbody>
             <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#7878AB; text-align:center;'><a href='https://psicofast.space/Sycofast/' style='color:#fff; text-decoration:none;'>Psicofast.space</a></td>
   
       </tr>
      
       <tr>
       <td colspan='4' style='padding:15px;'><center>
       <p style='font-size:20px;'>Saludos, Esta es su nueva clave de Psicofast "."</p>
       <hr />
       <p style='font-size:25px;'>Nueva Clave : ".$clave."</p>
       <img src='https://psicofast.space/Sycofast/Psicofastimg.png' alt='correo psicofast' title='Sending HTML eMail using PHPMailer in PHP' style='height:auto; width:55%; max-width:55%;' />
       <p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Psicofast Corp 2022 ".".</p></center>
       </td>
       </tr>
       <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#7878AB; text-align:center;'><a href='https://psicofast.space/Sycofast/' style='color:#fff; text-decoration:none;'>Ingresar a Psicofast</a></td>
   
       </tr>
      
              </tbody>";
    
$message .= "</table>";
   
$message .= "</td></tr>";
$message .= "</table>";
   
$message .= "</body></html>";

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if($cont!=0)
{
    if(mail($_POST['mail'],"Nueva Clave",$message,$cabeceras)){

        $sql2="update usuario set clave='".md5($clave)."' where mail='".$_POST['mail']."'";
        mysqli_query(conexion(),$sql2);

        //echo"Correo enviado";
        header('Location:index.php?recuperado');
    }else{
    
       // echo"Correo NO enviado";
       header('Location:Recuperar.php?no');

    }
 
}else{
   header('Location:Recuperar.php?error');
}

?>




