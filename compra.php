<?php
session_start();
if(!isset($_SESSION['carrito'])){
  header('Location: ./index.php');

}
$arreglo = $_SESSION['carrito'];
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
      <section class="section section-sm bg-transparent">
        <div class="container">
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="carritoc.php">Carrito</a></li>
                  <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Compra</span></li>
                </ul>
        </div>
      </section>
      <!-- Registro-->
<form action="./gracias.php" method="post">
      <div class="site-section">
        <div class="container">

          <div class="row">


            <div class="col-md-6 mb-5 mb-md-0">
              <h2 class="h3 mb-3 text-black">Datos del cliente</h2>
              <div class="p-3 p-lg-5 border">

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="apepat" class="text-black">Apellido paterno <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="apepat" name="apepat" required>
                  </div>
                  <div class="col-md-6">
                    <label for="apemat" class="text-black">Apellido materno <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="apemat" name="apemat" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="nombre" class="text-black"> Nombre </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                  </div>
                </div>



                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="email" class="text-black">Correo electrónico <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejem@dom.com" required>
                  </div>
                  <div class="col-md-6">
                    <label for="telefono" class="text-black">Teléfono <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                  </div>
                </div>

                <div class="form-group">
                      <div class="form-group">
                        <label for="password" class="text-black">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="********">
                      </div>
                    </div>


              </div>
            </div>
            <div class="col-md-6">



              <div class="row mb-5">
                <div class="col-md-12">
                  <h2 class="h3 mb-3 text-black">Su compra</h2>
                  <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-5">
                      <thead>
                        <th>Producto</th>
                        <th>Total</th>
                      </thead>
                      <tbody>
                        <?php
                        $total = 0;
                        for($i=0;$i<count($arreglo);$i++){
                          $total =$total+ ($arreglo[$i]['Precio']);

                         ?>
                        <tr>
                          <td><?php echo $arreglo[$i]['Nombre'];?></td>
                          <td>$<?php echo $arreglo[$i]['Precio'];?>.00</td>
                        </tr>

                        <?php
                      }
                         ?>
                         <tr>
                           <td class="text-black font-weight-bold"><strong>Total</strong></td>
                           <td class="text-black font-weight-bold"><strong>$<?php echo number_format($total, 2, '.', ''); ?></strong></td>
                         </tr>
                      </tbody>
                    </table>




                    <div class="form-group">
                      <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Confirmar compra</button>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>
          <!-- </form> -->
        </div>
      </div>
    </form>

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
