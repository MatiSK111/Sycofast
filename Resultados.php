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
<!-- Graficas -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>

</head>
<?php

$comp=0;
$nocomp=0;
$sql="select * from cola where rutpaciente='".$_SESSION['id']."'";
//echo $sql;
//die;
$result=mysqli_query(conexion(),$sql);
$cont=mysqli_num_rows($result);

while($datos=mysqli_fetch_array($result)){

    if($datos['Estado']==2){

        $comp=$comp+1; 
    }
    if($datos['Estado']==1){

        $nocomp=$nocomp+1; 
    }

}

?>
<body>


<br><br><br><br>

<div class="col-10 offset-1" style="padding-bottom:500px">
                <div class="card bg-primary shadow-soft text-center border-light">
                    <div class="card-body">
                    <br><br>

                        <div class="d-flex justify-content-around">
                            <div class="p-2 "><a href="Menupaciente.php" class="btn  btn-primary" type="button"><img src="assets\img\iconos\left-arrow.png" height ="30" width="30" /></a></div>
                            <div class="p-2"><h1 style="color:rgb(120,120,171);" >Datos Test</h1></div>
                            <div class="p-2 ">
                                <button class="btn btn-icon-only btn-pill btn-primary" type="button" aria-label="up button" title="up button">
                                <img src="assets\fotoperfil\<?php echo $_SESSION['foto']; ?>" height ="145" width="145" Style="border-radius:150px"/>
                                </button>
                            </div>
                        </div>
                       
                        <br><br>
                        <div class="row">
                        
                        <div class="col-3 offset-2">

                            <div class="card bg-primary shadow-soft text-center border-light">
                                <br><br><br>
                                <div class="card-body">
                                    <p><h4>Sr(a) <?php echo $_SESSION['user']; ?> Como puede apreciar a su derecha se encuentra una grafica en representacion de sus test realizados y los que aun estan por completar.
                                        es importante que usted complete la totalidad de los test que su Psicologo le envie ya que estos
                                        lo ayudaran con el prediagnostico y a la vez a agilizar su atencion.
                                    </p></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 offset-1"> <canvas id="grafica"  height="170%"></canvas></div>
                       
                    </div>
                    <br><br>  <br>
                   

                 </div>
            </div>
         </div>
            
</body>

<script>
//pasamos las variABLES completada y nocomp de php a javascript
const co = "<?php echo $comp ?>";
const noco = "<?php echo $nocomp ?>";


    const $grafica = document.querySelector("#grafica");
// Las etiquetas son las porciones de la gráfica
const etiquetas = ["Test Completados", "Test Por realizar"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosIngresos = {
    data: [co, noco], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    // Ahora debería haber tantos background colors como datos, es decir, para este ejemplo, 4
    backgroundColor: [
        'rgba(163,221,203,0.2)',
        'rgba(229,112,126,0.2)',
    ],// Color de fondo
    borderColor: [
        'rgba(163,221,203,1)',
        'rgba(229,112,126,1)',
    ],// Color del borde
    borderWidth: 2,// Ancho del borde
};
new Chart($grafica, {
    type: 'pie',// Tipo de gráfica. Puede ser dougnhut o pie
    data: {
        labels: etiquetas,
        datasets: [
            datosIngresos,
            // Aquí más datos...
        ]
    },
});



</script>



</html>