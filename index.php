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
<script src="javascript/validarformusuario.js"></script>
<!-- Alertas facheritas -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body id="body" >
<br><br>
<br><br><br><br><br>

<div class="col-6 offset-3 " style="padding-bottom: 500px" >
                <div class="card shadow-soft text-center border-light" id="card">
                <form name="login" action="procesalogin.php" method="post" >
                <br>
                    <div class="card-body">
                    <img src="assets\img\iconos\Psicofastlogoround.png">
                    <br><br>
                    <h1 style="color:rgb(120,120,171);" >Iniciar sesion</h1><br>
                        
                            <div class="mb-3">
                                
                                <input type="text" class="form-control col-6 offset-3" id="user"name="user" placeholder="Usuario">
                            </div>
                            <br>
                            <div class="mb-3">
                               
                                <input type="password" class="form-control col-6 offset-3" id="pass"name="pass" placeholder="Contraseña">
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary" id="btnregistrar" value="Ingresar" onclick="validarlogin();">Ingresar</button>
                            <br><br>
                            <a href="Recuperar.php">Olvidaste tu clave? Recuperar</a>
                        
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
        swal("Error!", "No se encuentra registrado", "error");
        document.login.user.focus();
        </script>

        <?php
        }
        ?>

<?php
        if(isset($_GET['recuperado']))
        {
            ?>
        <script>
        swal("Enviado!", "Nueva clave enviada a su correo", "success");
        
        </script>

        <?php
        }
        ?>




</body>
</html>