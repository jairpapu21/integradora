<?php
session_start();
include './conexion.php';
if(!isset($_SESSION['carrito'])){header('Location: ./index.php');}
$arreglo = $_SESSION['carrito'];
$total=0;
for($i=0;$i<count($arreglo);$i++){
  $total=$total+($arreglo[$i]['Precio']);
}
$password="";

if(isset($_POST['password'])){
  if($_POST['password']!=""){
    $password = $_POST['password'];
  }
}

$conexion -> query ("insert into usuario (nombre,apepat,apemat,telefono,email,password,nivel)
 values(
   '".$_POST['nombre']."',
   '".$_POST['apepat']."',
   '".$_POST['apemat']."',
   '".$_POST['telefono']."',
   '".$_POST['email']."',
   '".sha1($password)."',
   'cliente'
   )
  ")or die ($conexion->error);
$id_usuario = $conexion->insert_id;

  $fecha = date('Y-m-d h:m:s');
  $conexion -> query ("insert into ventas(id_usuario,total, fecha) values($id_usuario,$total,'$fecha')")or die($conexion->error);
  $id_ventas = $conexion ->insert_id;

  for($i=0;$i<count($arreglo);$i++){
    $conexion -> query ("insert into cursos_ventas(id_ventas,id_cursos,precio)
     values(
       $id_ventas,
       ".$arreglo[$i]['Id'].",
       ".$arreglo[$i]['Precio']."
       )")or die($conexion->error);
  }
  unset($_SESSION['carrito']);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carrito</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Template Monster Admin Template">
    <meta property="og:description" content="brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.">
    <meta property="og:image" content="http://digipunk.netii.net/images/radar.gif">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="components/base/base.css">
    <script src="components/base/core.js"></script>
    <script src="components/base/script.js"></script>


<!--Carrito-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">


<link rel="stylesheet" href="carrito/css/magnific-popup.css">
<link rel="stylesheet" href="carrito/css/jquery-ui.css">
<link rel="stylesheet" href="carrito/css/owl.carousel.min.css">
<link rel="stylesheet" href="carrito/css/owl.theme.default.min.css">


<link rel="stylesheet" href="carrito/css/aos.css">

<link rel="stylesheet" href="carrito/css/style.css">
  </head>
  <body>

      <!--RD Navbar-->
      <?php include "./header1.php"; ?>
      <!-- Breadcrumb default-->

      <!-- Registro-->
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <span class="icon-check_circle display-3 text-success"></span>
              <h2 class="display-3 text-black">¡Gracias por su compra!</h2>
              <p class="lead mb-5">Su orden fue completada con éxito.</p>
              <p><a href="index.php" class="btn btn-sm btn-primary">Volver al inicio</a></p>
            </div>
          </div>
        </div>
      </div>

<br><br>
      <!-- Footer default-->
      <?php include "./footer1.php"; ?>
    </div>
    <div class="to-top int-arrow-up"></div>

    <script src="carrito/js/jquery-3.3.1.min.js"></script>
    <script src="carrito/js/jquery-ui.js"></script>
    <script src="carrito/js/popper.min.js"></script>
    <script src="carrito/js/bootstrap.min.js"></script>
    <script src="carrito/js/owl.carousel.min.js"></script>
    <script src="carrito/js/jquery.magnific-popup.min.js"></script>
    <script src="carrito/js/aos.js"></script>
    <script src="carrito/js/main.js"></script>


  </body>
</html>
