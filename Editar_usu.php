<?php
include("functions/setup.php");
session_start();

$rut=$_GET["Rut"];
$sql="SELECT * FROM usuario WHERE rut='$rut'";
$result=mysqli_query(conexion(), $sql);
?>
<!DOCTYPE html>
<html >
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

<!-- Alertas facheritas -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body >


<br><br>
<div class="col-10 offset-1" style="padding-bottom:500px">
                <div class="card bg-primary shadow-soft text-center border-light">
                    <div class="card-body">

                    <div class="d-flex justify-content-around">
                            <div class="p-2 "><a href="javascript:history.back()" class="btn  btn-primary" type="button"><img src="assets\img\iconos\left-arrow.png" height ="30" width="30" /></a></div>
                            <div class="p-2"><h1 style="color:rgb(120,120,171);" >Editar Pacientes</h1></div>
                            <div class="p-2 ">
                                <button class="btn btn-icon-only btn-pill btn-primary" type="button" aria-label="up button" title="up button">
                                <img src="assets\fotoperfil\<?php echo $_SESSION['foto']; ?>" height ="145" width="145" Style="border-radius:150px"/>
                                </button>
                            </div>
                        </div>


            <form name="form1" action="procesar_actualizar.php" method="POST" enctype="multipart/form-data" >

            <div class="section  text-dark section-lg" >

                            <div class="row justify-content-center" >
                                <div class="col-lg-11" >
                             
                                    <div class="mb-5">
                                        <table class="table shadow-soft rounded">
                                <table class="table shadow-soft rounded">
                                    <tr>
                                        <th class="border-0" scope="col">Rut</th>
                                        <th class="border-0" scope="col">Nombre</th>
                                        <th class="border-0" scope="col">Apellidos</th>
                                        <th class="border-0" scope="col">Fecha de nacimiento</th>
                                        
                                    </tr>
                                    
                            <?php
                            while($datos=mysqli_fetch_array($result)){
                            ?>
                                    <tr>
                                        <input type="hidden" value="<?php echo $datos['rut']?>" name=rrut id="rrut" >
                                        <td><input class="form-control "type="text" value="<?php echo $datos['rut']?>" name=Rut id="Rut" required></td>
                                        <td><input class="form-control "type="text" value="<?php echo $datos['nombres']?>" name=nom id="nom" required></td>
                                        <td><input class="form-control "type="text" value="<?php echo $datos['Apellidos']?>" name=ape id="ape" required></td>
                                        <td><input class="form-control "type="text" value="<?php echo $datos['fechanac']?>" name=fech id="fech" required></td>
                                        
                                    
                                    </tr>
                                    <tr>
                                    
                                        <th class="border-0" scope="col">Direccion</th>
                                        <th class="border-0" scope="col">Telefono</th>
                                        <th class="border-0" scope="col">Email</th>
                                        <th class="border-0" scope="col">Estado</th>

                                    </tr>
                                    <tr>
                                        
                                        <td><input class="form-control "type="text" value="<?php echo $datos['direccion']?>" name=direc id="direc" required></td>
                                        <td><input class="form-control " type="text" value="<?php echo $datos['telefono']?>" name=tel id="tel" required minlength="9"></td>
                                        <td><input class="form-control "type="text" value="<?php echo $datos['mail']?>" name=mail id="mail" required></td>
                                        <td><input class="form-control "type="text" value="<?php echo $datos['estado']?>" name=estado id="estado" required></td>
                                        <br>
                                    </tr>
                                    
            
            <?php
            } ?>
            
            </table>
            <center>
            <br>
            <input type="submit" class="btn btn-primary" id="btnregistrar"  onclick="validar_actualizar();" value="Actualizar">
            <a href="Listar_usu.php" style="margin-left: 30px" class="btn btn-primary">Volver</a>
            </center>
            </div>
            </div>
            </div>
            </div>
            
            </div>
            </form>

        </div>
    </div>
</div>   
  
</body>
</html >