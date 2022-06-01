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
<link type="text/css" href="./css/login.css" rel="stylesheet">

</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body id="body" >
<br><br>

<div class="col-8 offset-2 ">
                <div class="card shadow-soft text-center border-light" id="card">
                    <div class="card-body">
                    <br><br>
                    <h1>Registrar Usuario</h1><br>
                        <form>
                            <div class="mb-3">
                                <label for="user" class="form-label">Usuario</label>
                                <input type="text" class="form-control" id="user">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo</label>
                                <input type="mail" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="pass">
                            </div>
                            
                            <div class="mb-3">
                            <label for="usuarios">Tipo de usuario</label>

                            <select name="usuarios" id="usuaios_">
                            <option value="volvo">Psicologo</option>
                            <option value="saab">Paciente</option>
                            <option value="mercedes">Secretaria</option>
                            </select>
                            </div>
                            
                            <button type="submit" class="btn btn-lg" id="ingre">Registrar</button>
                        </form>
                        <br><br>
                    </div>
                </div>
</div>
</body>
</html>