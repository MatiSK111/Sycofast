<?php

include("functions/setup.php");

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Psicofast</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Psicofast">
<meta name="author" content="Themesberg">

<link rel="canonical" href="https://themesberg.com/product/ui-kits/neumorphism-ui/" />

<!--  Social tags -->
<meta name="keywords" content="neumorphism, neumorphism ui, neomorphism, neomorphism ui, neomorphism css, neumorphism css, neumorph, neumorphic, design system, login, form, table, tables, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, about us, account, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, themesberg, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">
<meta name="description" content="Start developing neumorphic web applications and pages using Neumorphism UI. It features over 100 individual components and 5 example pages.">


<!-- Favicon -->

<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/Psicofastlogoround.png">
<link rel="manifest" href="./assets/img/favicon/site.webmanifest">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="./css/neumorphism.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

</head>
<?php
$idtest=0;
$reg="";

$sql="select * from cola where rutpaciente='".$_SESSION['id']."' and estado = 1";
//echo $sql;
//die;
$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);

if($cont!=0){

  $idtest=$datos['idtest'];
  $reg=$datos['registro'];
}

?>

<body>

<br><br><br><br>

<div class="col-8 offset-2" style="padding-bottom:500px">
                <div class="card bg-primary shadow-soft text-center border-light">
                    <div class="card-body">
                    <br><br>
                   
                      <div class="d-flex justify-content-around">
                        <div class="p-2 "><a href="cerrarsesion.php" class="btn  btn-primary" type="button"><img src="assets\img\iconos\logout.png" height ="30" width="30" /></a></div>
                        <div class="p-2"><h1 style="color:rgb(120,120,171);" >Menu Principal</h1></div>
                        <div class="p-2 ">
                          <button class="btn btn-icon-only btn-pill btn-primary" type="button" aria-label="up button" title="up button">
                            <img src="assets\fotoperfil\<?php echo $_SESSION['foto']; ?>" height ="145" width="145" Style="border-radius:150px"/>
                         </button>
                       </div>
                     </div>

                     <div class="d-flex justify-content-around">
                            <div class="p-2 "></div>
                            <div class="p-2"></div>
                            <div class="p-2 offset-1 ">
                            <h3 style="color:rgb(120,120,171);"><?php echo $_SESSION['user']; ?></h3>
                                </button>
                            </div>
                        </div>
                    
                     <br><br><br><br>
                      <div class="container">
                        <div class="row align-items-end">
                        <?php  if($cont=!0){ ?>

                          <div class="col">
                            <a href="procesainiciotest.php?t=<?php echo $idtest;?>&r=<?php echo $_SESSION['id']; ?>&reg=<?php echo $reg;?>"class="btn btn-lg btn-primary" type="button"><pre>    <h3 >   Realizar Test   </h3>    </pre><img src="assets\img\iconos\test.png" height ="50" width="50" /></a>
                            </div>
                            <div class="col">

                        <?php  } ?>
                         
                            <a href="Mistest.php"class="btn btn-lg btn-primary2" type="button"><pre>    <h3 >   Ver mis Test   </h3>    </pre><img src="assets\img\iconos\lista.png" height ="50" width="50" /></a>
                            </div>
                            <div class="col">
                            <a href="Resultados.php"class="btn btn-lg btn-primary3" type="button"><pre>    <h3 Style="Color:#FFF">   Mis Estadisticas   </h3>    </pre><img src="assets\img\iconos\stats.png" height ="50" width="50" /></a>
                            </div>
                          </div>
                      </div> 
                      <br><br><br><br>


                    </div>
                  </div>
            </div>

   <?php
   if($_GET['test']=='fin')
    {
    ?>
        <script>
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Test Completado correctamente',
          showConfirmButton: true,
          timer: 2000
        })
        
        </script>

  <?php
   }
    ?>

  <?php
        if(isset($_GET['no']))
        {
            ?>
        <script>
        Swal.fire(
          'No Hay test',
          'Usted no tiene test por completar Actualmente',
          'question'
        )
        
        </script>

        <?php
        }
        ?>
</body>
</html>