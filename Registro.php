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
<script src="Javascript/validarregistro.js"></script>
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
                <form name="form1" action="procesaregistro.php" method="post" enctype="multipart/form-data">
                
                    <div class="card-body">
                    <img src="assets\img\iconos\Psicofastlogoround.png">
                    <br>
                    <h1 style="color:rgb(120,120,171);" >Registrar usuario</h1><br>
                    <div class="mb-3">
                                
                                <input type="text" class="form-control col-6 offset-3" id="rut"name="rut" placeholder="RUT">
                            </div>
                            <br>
                            <div class="mb-3">
                                
                                <input type="text" class="form-control col-6 offset-3" id="nombres"name="nombres" placeholder="Nombres">
                            </div>
                            <br>
                            <div class="mb-3">
                                
                                <input type="text" class="form-control col-6 offset-3" id="apellidos"name="apellidos" placeholder="Apellidos">
                            </div>
                            <br>
                            <div class="mb-3">
                                
                                <input type="text" class="form-control col-6 offset-3" id="user"name="user" placeholder="Usuario">
                            </div>
                            <br>
                            <div class="mb-3">
                                
                                <input type="password" class="form-control col-6 offset-3" id="pass"name="pass" placeholder="Contraseña">
                            </div>
                            <br>
                            <div class="mb-3">
                               
                                <input type="date" class="form-control col-6 offset-3" id="fechanac"name="fechanac" placeholder="Fecha de nacimientos">
                            </div>
                            <br>
                            <div class="mb-3">
                                
                                <input type="text" class="form-control col-6 offset-3" id="direccion"name="direccion" placeholder="Dirección">
                            </div>
                            <br>
                            
                            <div class="mb-3">
                            <select id="estado "name="estado" class="form-control col-6 offset-3" >
                                <option value="" selected >Elija el estado del usuario</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                            </div>
                            <br>
                            <div class="mb-3">
                                
                                <input type="text" class="form-control col-6 offset-3" id="telefono"name="telefono" placeholder="Teléfono">
                            </div>
                            <br>
                            <div class="mb-3">
                                
                                <input type="email" class="form-control col-6 offset-3" id="correo"name="correo" placeholder="Correo electronico">
                            </div>
                            <br>
                           
                                <div class="custom-file ">
                                    <input type="file" class="custom-file-input" id="foto"name="foto" aria-label="Foto de perfil" >
                                    <label class="custom-file-label" for="customFile">Foto de perfil</label>
                                </div>
                            
                            <br>
                            <br>
                          
                            <button type="button" class="btn btn-primary" id="btnregistrar" value="Registrar" onclick="validarregistro();">Registrar</button>
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