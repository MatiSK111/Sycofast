<?php
include("functions/setup.php");
session_start();

$sql="SELECT * FROM usuario";
$result=mysqli_query(conexion(), $sql);


$sql2="SELECT * FROM test";
$result2=mysqli_query(conexion(), $sql2);

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
                            <div class="p-2"><h1 style="color:rgb(120,120,171);" >Enviar Test a Pacientes</h1></div>
                            <div class="p-2 ">
                                <button class="btn btn-icon-only btn-pill btn-primary" type="button" aria-label="up button" title="up button">
                                <img src="assets\fotoperfil\<?php echo $_SESSION['foto']; ?>" height ="145" width="145" Style="border-radius:150px"/>
                                </button>
                            </div>
                        </div>

                <form name="form1" action="Procesaenvio.php" method="POST" enctype="multipart/form-data" >
                <div class="section  text-dark section-lg" >

                        <div class="row justify-content-center" >
                            <div class="col-lg-10" >
                           
                                <div class="mb-5">
                                    <table class="table shadow-soft rounded">
                                        <tr>
                                            <th class="border-0" scope="col">Tipo</th>
                                            <th class="border-0" scope="col">Rut</th>
                                            <th class="border-0" scope="col">Nombre</th>
                                            <th class="border-0" scope="col">Apellidos</th>
                                            <th class="border-0" scope="col">Estado</th>
                                            <?php while($datos2=mysqli_fetch_array($result2)){ 
                                            ?>
                                            <th class="border-0" scope="col"><?php echo $datos2['nombre test']; ?></th>
                                            <?php }
                                            ?>
                                        </tr>
                                        
                <?php
                while($datos=mysqli_fetch_array($result)){
                    if($datos['tipo']=="Paciente"){
                
                ?>
                    
                <tr>
                                            <td><?php echo $datos['tipo']?></td>
                                            <td><?php echo $datos['rut']?></td>
                                            <td><?php echo $datos['nombres']?></td>
                                            <td><?php echo $datos['Apellidos']?></td>
                                        
                                            <td><?php if ($datos['estado']==1){
                                                        echo "Activo";
                                                    }else{
                                                    echo "Inactivo";
                                                    }
                                            
                                            ?></td>

                                            <?php 
                                            $sql3="SELECT * FROM test";
                                            $result3=mysqli_query(conexion(), $sql3);
                                            while($datos3=mysqli_fetch_array($result3)){ 
                                            ?>
                                            <td><a href="Procesaenvio.php?Rut=<?php echo $datos['rut']?>&te=<?php echo $datos3['idtest']; ?>"class="btn btn-primary" type="button">Enviar</a></td>

                                            <?php }
                                            ?>
                                            

                                            
                                            
                                        </tr>
                <?php
                    }
                } ?>
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
