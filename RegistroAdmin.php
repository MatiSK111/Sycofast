<!DOCTYPE html>
<html>
<head>
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
<script src="Javascript/validarregistroadmin.js"></script>
<!-- Alertas facheritas -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body id="body" >
<br>


<div class="col-6 offset-3 " style="padding-bottom: 500px" >
            <div class="card shadow-soft text-center border-light" id="card">
                <form name="form2" action="procesaregistroadmin.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <img src="assets\img\iconos\Psicofastlogoround.png">
                        <br>
                        <h1 style="color:rgb(120,120,171);" >Registrar Usuario</h1><br>
                            <div class="row ">
                                <div class="mb-3 col-6">
                                <input type="text" class="form-control " id="rut"name="rut" placeholder="RUT">
                                </div>
                                <br>
                                <div class="mb-3 col-6">
                                
                                <input type="text" class="form-control" id="user"name="user" placeholder="Usuario">
                                </div>      
                            </div>
                            <br>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <input type="text" class="form-control  " id="nombres"name="nombres" placeholder="Nombres">
                                </div>
                                <div class="mb-3 col-6">
                                    <input type="text" class="form-control" id="apellidos"name="apellidos" placeholder="Apellidos">
                                </div>
                                <br>
                            
                            </div>
                            <br>
                            <div class="row">
                                <div class="mb-3 col-6">                             
                                    <input type="password" class="form-control " id="pass"name="pass" placeholder="Contraseña">
                                </div>
                                <br>
                                <div class="mb-3 col-6">                           
                                    <input type="date" class="form-control " id="fechanac"name="fechanac" placeholder="Fecha de nacimiento">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <select id="tipo "name="tipo" class="form-control" >
                                        <option value="" selected >Elija el tipo usuario</option>
                                        <option value="paciente">Paciente</option>
                                        <option value="psicologo">Psicologo</option>
                                        <option value="secretaria">Secretaria</option>
                                        <option value="admin">Admin</option>
                                    </select>                               
                                </div>
                                <br>                           
                                <div class="mb-3 col-6">
                                    <select id="estado "name="estado" class="form-control" >
                                        <option value="" selected >Elija el estado del usuario</option>
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="mb-3 col-6">                               
                                    <input type="text" class="form-control " id="telefono"name="telefono" placeholder="Teléfono">
                                </div>
                                <br>
                                <div class="mb-3 col-6">                               
                                    <input type="email" class="form-control " id="correo"name="correo" placeholder="Correo electronico">
                                </div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary" id="btnregistrar" value="Registrar" onclick="validarregistroadmin();">Registrar</button>
                            <br><br>                                                   
                        <br><br>
                    </div>
                </form>
            </div>
</div>



<?php
        if(isset($_GET['error']))
        {
            ?>
        <script>
        swal("Este RUT ya se encuentra registrado");
        
        </script>

        <?php
        }
        ?>

</body>
</html>