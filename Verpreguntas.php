<?php
include("functions/setup.php");
session_start();

$sql="SELECT * FROM pregunta where Test_idtest=".$_GET['id'];
$result=mysqli_query(conexion(), $sql);

//Vemos cual es la pregunta que tiene mas alternativas para dejar maximo en la tabla
$sql2="select Pregunta_idpregunta, count(Pregunta_idpregunta) as total from alternativa where Pregunta_Test_idtest = ".$_GET['id']." group by Pregunta_idpregunta order by 2 desc";
$result2=mysqli_query(conexion(), $sql2);
$datos2=mysqli_fetch_array($result2);


/*
$menu="";
if($_SESSION['tipousu']=="Psicologo"){
$menu="MenuPsicologo.php";
}

if($_SESSION['tipousu']=="Secretaria"){
    $menu="MenuSecretaria.php";
    }
    */
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
                            <div class="p-2 "><a href="javascript:history.back()" class="btn  btn-primary" type="button"><img src="assets\img\iconos\left-arrow.png" height ="30" width="30" /></a></div>
                            <div class="p-2"><h1 style="color:rgb(120,120,171);" >Informacion del Test <?php echo $_GET['id']; ?></h1></div>
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
                                            <th class="border-0" scope="col">Id Pregunta</th>
                                            <th class="border-0" scope="col">Descripcion</th>
                                            <th class="border-0" scope="col">Numero</th>
                                            
                                            <?php
                                            $i=1;
                                            while($i<=$datos2['total']){ ?>
                                            <th class="border-0" scope="col">Alternativa <?php echo $i; ?></th>

                                            <?php
                                            $i=$i+1;
                                            }  ?>
                                           
                                        
                                        </tr>
                                        
                <?php
                while($datos=mysqli_fetch_array($result)){
                    $sql4="SELECT * FROM alternativa where Pregunta_idpregunta=".$datos['idpregunta'];
                    $result4=mysqli_query(conexion(), $sql4);
                ?>
                    
                                        <tr>
                                            
                                            <td><?php echo $datos['idpregunta']?></td>
                                            <td><?php echo $datos['Descripcionpregunta']?></td>
                                            <td><?php echo $datos['numeropregunta']?></td>
                                                                        <?php
                                            while($datos4=mysqli_fetch_array($result4)){ ?>

                                                <td><?php echo $datos4['descripcionalternativa']?></td>

                                            <?php    }      ?>

                                            

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
