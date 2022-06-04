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
                <form name="login" action="EnviarCorreo.php" method="post" >
                <br>
                    <div class="card-body">
                    <img src="assets\img\iconos\Psicofastlogoround.png">
                    <br><br>
                    <h1 style="color:rgb(120,120,171);" >Recuperar Clave</h1><br>
                        
                            <div class="mb-3">
                                
                                <input type="email" class="form-control col-6 offset-3" id="mail"name="mail" placeholder="Correo Electronico">
                            </div>
                            <br>
                           
                            <br>
                            <button type="submit" class="btn btn-primary" id="btnregistrar" value="Ingresar" >Recuperar</button>
                            
                        
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
        swal("Error!", "Correo no se encuentra registrado", "error");
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
        swal("Error!", "Correo no se encuentra registrado", "error");
        document.login.user.focus();
        </script>

        <?php
        }
        ?>


</body>
</html>