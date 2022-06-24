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
include("functions/setup.php");
session_start();



$sql="SELECT * FROM pregunta WHERE Test_idtest=".$_GET['t'];
$result=mysqli_query(conexion(), $sql);
$cont=mysqli_num_rows($result);
$datos=mysqli_fetch_array($result);


//$final=false;
$_GET['p'];

$final=false;


if($_GET['p']>=$cont){

  $final=true;
}


$aumento = ($_GET['p']*100)/$cont;


// aca podemos obtener todos los datos de la pregunta actual
$sql2="SELECT * FROM pregunta WHERE Test_idtest = ".$_GET['t']." and numeropregunta= ".$_GET['p'];
$result2=mysqli_query(conexion(), $sql2);
$datos2=mysqli_fetch_array($result2);

//obtenemos la cantida de alternativas
$sql3="SELECT * FROM alternativa WHERE Pregunta_idpregunta   = ".$datos2['idpregunta'];
//echo $sql3;
//die;
$result3=mysqli_query(conexion(), $sql3);
$cont3=mysqli_num_rows($result3);



//llenamos el arreglo con las descripciones de las alternativas
$i=1;
while($i<=$cont3){
  $sql4="SELECT * FROM alternativa WHERE Pregunta_idpregunta   = ".$datos2['idpregunta']." and numeroalternativa =".$i ;
  $result4=mysqli_query(conexion(), $sql4);
  $dato4=mysqli_fetch_array($result4);

  $alt[] = $dato4['descripcionalternativa'];
  $ids[] = $dato4['idAlternativas'];

$i=$i+1;
}



?>

<body>

<br><br><br>
 <form name="test" action="procesaTest.php?&reg=<?php echo $_GET['reg'];?>&t=<?php echo $_GET['t'];?>&p=<?php echo $_GET['p'];?>" method="post" > 

  <input type="hidden" name="idpregunta" value="<?php echo $datos2['idpregunta']?>">

  <div class="col-8 offset-2" style="padding-bottom:500px">
    <div class="card bg-primary shadow-soft text-center border-light">
       <div class="card-body">
              <h5 style="color:rgb(120,120,171);" >Id Test <?php echo $_GET['t']; ?></h5>

          <div class="d-flex justify-content-around">
                          <div class="p-2 "><button class="btn  btn-primary" type="button"><img src="assets\img\iconos\salir.png" height ="30" width="30" onClick="salir();"/></button></div>
                          <div class="p-2"><h1 style="color:rgb(120,120,171);" >Pregunta numero <?php echo $_GET['p'];?></h1></div>
                          <div class="p-2 ">
                          
                            <h4 style="color:rgb(120,120,171);" >  Pregunta <?php echo $_GET['p'];?> de <?php echo $cont;?>  </h4> 
                            <div class="progress"  style="height: 20px; ">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $aumento?>%"  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      
                      <br>
                        <div class="container">
                          <div class="row align-items-end">
                              <div class="col-8 offset-2">

                              <div class="card shadow-inset bg-primary border-light p-4 rounded">
                              <div class="card-body p-0">
                                <div class="tab-content" id="tabcontent1">

                                    <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                                      
                                        <p>  <?php echo $datos2['Descripcionpregunta']; ?> </p>
                                        
                                        <img src="assets\img\imagenespregunta\<?php echo $datos2['imagen'];?>" height ="300" width="400" />
                                    </div>
                                  </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                        </div> 
                        <br> <br>
                        
                              <div class="container">
                              <div class="row">
                                <div class="col-5 offset-1">
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eleccion" id="alt1" value="<?php echo $ids[0]; ?>" >
                                    <label class="form-check-label" for="alt1">
                                    <?php echo $alt[0]; ?>
                                    </label>
                                  </div>

                                </div>
                                <div class="col-5 ">

                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eleccion" id="alt2" value="<?php echo $ids[1]; ?>">
                                    <label class="form-check-label" for="alt2">
                                    <?php echo $alt[1]; ?>
                                    </label>
                                  </div>

                                </div>
                                <div class="w-100"><br> <br></div>
                                <div class="col-5 offset-1">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eleccion" id="alt3" value="<?php echo $ids[2]; ?>">
                                    <label class="form-check-label" for="alt3">
                                    <?php echo $alt[2]; ?> 
                                    </label>
                                  </div>

                                </div>
                                <div class="col-5 ">

                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="eleccion" id="alt4" value="<?php echo $ids[3]; ?>">
                                    <label class="form-check-label" for="alt4">
                                      
                                    <?php echo $alt[3]; ?>
                                    </label>
                                  </div>

                                </div>
                              </div>
                            </div>

                          

                            <br> <br>
                        <div class="container">
                          <div class="row align-items-end">
                              <div class="col">
                              <div class="p-2 "><button name="accion" value="a" class="btn  btn-primary" type="button"  onclick="enviar()"><img src="assets\img\iconos\anterior.png" height ="50" width="55" /></button></div>
                              </div>
                              <div class="col">
                              <?php if($final){
                                ?>
                            
                              <div class="p-2 "><button  name="finalizar" class="btn btn-primary" type="submit"><img src="assets\img\iconos\check.png" height ="43" width="40" /></button></div>
                              
                              <?php } ?>
                              </div>
                              <div class="col">
                              <div class="p-2 "><button name="accion" value="s" class="btn  btn-primary" type="button" onclick="enviar()"><img src="assets\img\iconos\siguiente.png" height ="50" width="55"  /></button></div>
                              </div>
                            
                            </div>
                        </div> 
                    </div>
              </div>
            </div>
       <form > 

</body>


        <script>

          function salir(){

            //swal("Enviado!", "Nueva clave enviada a su correo", "success");
             Swal.fire({
            title: 'Esta seguro que quiere salir ?',
            text: "No se guardara el pregreso en este test",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33 ',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'SI, salir'
          }).then((result) => {
            if (result.isConfirmed) {
              
              window.open("Menupaciente.php", "_self");   
            }
           
          })
          }
     
          function enviar(){

            document.test.submit();
          }
        
        </script>

      

</html>