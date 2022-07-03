<?php
include("functions/setup.php");
session_start();

$sql="SELECT * FROM registro where estado = 2";
$result=mysqli_query(conexion(), $sql);



$menu="";
if($_SESSION['tipousu']=="Psicologo"){
$menu="MenuPsicologo.php";
}

if($_SESSION['tipousu']=="Secretaria"){
    $menu="MenuSecretaria.php";
    }
if($_SESSION['tipousu']=="Admin"){
        $menu="MenuAdmin.php";
}
?>
<!DOCTYPE html>
<html>
<head>


<!--Validaciones-->
<script src="Javascript/validar_actualizar.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Psicofast</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Psicofast">
<meta name="author" content="Themesberg">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Pixel CSS -->
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/Psicofastlogoround.png">


<link type="text/css" href="./css/neumorphism.css" rel="stylesheet">
<!-- Validaciones -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

<!-- Alertas facheritas -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body >
<div  style="padding-bottom:800px">

<br><br>
<div class="col-10 offset-1" style="padding-bottom:500px">
                <div class="card bg-primary shadow-soft text-center border-light">
                    <div class="card-body">

                    <div class="d-flex justify-content-around">
                            <div class="p-2 "><a href="<?php echo $menu; ?>" class="btn  btn-primary" type="button"><img src="assets\img\iconos\left-arrow.png" height ="30" width="30" /></a></div>
                            <div class="p-2"><h1 style="color:rgb(120,120,171);" >Registro de test</h1></div>
                            <div class="p-2 ">
                                <button class="btn btn-icon-only btn-pill btn-primary" type="button" aria-label="up button" title="up button">
                                <img src="assets\fotoperfil\<?php echo $_SESSION['foto']; ?>" height ="145" width="145" Style="border-radius:150px"/>
                                </button>
                            </div>
                        </div>

                <form name="form1" action="Procesaenvio.php" method="POST" enctype="multipart/form-data" >
                <div class="section  text-dark section-lg" >

                        <div class="row justify-content-center" >
                            <div class="col-lg-11" >
                           
                                <div class="mb-5">
                                    <table class="table shadow-soft rounded">
                                        <tr>
                                            <th class="border-0" scope="col">Nombre Test</th>
                                            <th class="border-0" scope="col">Id registro</th>
                                            <th class="border-0" scope="col">Rut Paciente</th>
                                            <th class="border-0" scope="col">Nombre Paciente</th>
                                            <th class="border-0" scope="col">Fecha</th>
                                            <th class="border-0" scope="col">Puntaje</th>
                                            <th class="border-0" scope="col">Resultado</th>
                                           
                                        </tr>
                                        
                <?php
                while($datos=mysqli_fetch_array($result)){
                   
                   
                    $sql3="SELECT * FROM test where idtest = ".$datos['Test_idtest'];
                    $result3=mysqli_query(conexion(), $sql3);
                    $datos3=mysqli_fetch_array($result3);

                    $sql4="SELECT * FROM usuario where rut = '".$datos['Usuario_rut']."'";
                    $result4=mysqli_query(conexion(), $sql4);
                    $datos4=mysqli_fetch_array($result4)
                    
                ?>
                    
                                        <tr>
                                            <td><?php echo $datos3['nombre test']?></td>
                                            <td><?php echo $datos['idregistro']?></td>
                                            <td><?php echo $datos['Usuario_rut']?></td>
                                            <td><?php echo $datos4['nombres']." ".$datos4['Apellidos'] ?></td>
                                            <td><?php echo $datos['fecha']?></td>
                                            <td><?php echo $datos['puntaje']?></td>
                                            <td><?php echo $datos['Resultado']?></td>

                                        </tr>
                <?php
                    }
                 ?>
                </table>


                </center>
            </div>
        </div>
    </div>

<?php
        if(isset($_GET['error']))
        {
            ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se pudo enviar el test porque ya hay uno enviado sin completar',
                    })
        
            </script>

        <?php
        }if(isset($_GET['correcto']))
        {
        ?>
            <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Test Enviado Correctamente',
            showConfirmButton: true,
            timer: 2000
            })
            
            </script>


        <?php
        }
        ?>

<?php
