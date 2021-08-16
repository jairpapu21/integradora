<?php
  include("./conexion.php");
  if(isset($_GET['id'])){
    $resultado = $conexion ->query("select * from cursos where id=".$_GET['id'])or die($conexion->error);
    if(mysqli_num_rows($resultado) > 0 ){
      $fila = mysqli_fetch_row($resultado);
    }else{
      header("Location: ./index.php");
    }
  }else{
    //redireccionar
    header("Location: ./index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Capítulo 1</title>
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
  </head>
  <body>

      <!--RD Navbar-->
      <?php include "./header1.php"; ?>
      <!-- Breadcrumb default-->
      <section class="section section-sm bg-transparent">
        <div class="container">
                <!-- Breadcrumb-->

        </div>
      </section>
      <!-- Registro-->
      <center><h2><?php echo $fila[1];?></h2></center>
      <section class="section section-lg bg-transparent">
        <div class="container">

          <div class="row row-30">
            <div class="col-md-5">
              <h4>Descripción del capítulo</h4>
              <p><?php echo $fila[2];?></p>
              <img src="images/<?php echo $fila[3];?>" width="480px" height="500px">
            </div>
            <div class="col-md-7">
              <center><ol>
                <br><br><br>
                <li class="list-item"><strong>Precio</strong></li><br>
                <li class="list-item">$<?php echo $fila[4];?> MNX</li><br><br>
                <li class="list-item"><strong>Certificación</strong></li><br>
                <li class="list-item"><?php echo $fila[6];?></li><br><br>
              </ol></center>
              <div class="flex-shrink-0">
                <center><a class="btn btn-lg btn-secondary" href="carritoc.php?id=<?php echo $fila[0]; ?>">Añadir al carrito</a></center>
              </div>
              </div>
            </div>
          </div>

      </section>

      <br>
      <br>
      <!-- Footer default-->
      <?php include "./footer1.php"; ?>
    </div>
    <div class="to-top int-arrow-up"></div>
  </body>
</html>
