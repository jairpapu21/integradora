<?php
session_start();
include './conexion.php';
if(isset($_SESSION['carrito'])){
  if(isset($_GET['id'])){
    $arreglo=$_SESSION['carrito'];
    $encontro=false;
    $numero=0;
    for($i=0;$i<count($arreglo);$i++){
      if($arreglo[$i]['Id'] == $_GET['id']){
        $encontro=true;
        $numero=$i;
      }
    }
    if($encontro==true){
      $_SESSION['carrito']=$arreglo;
    }else{
      $nombre="";
      $precio="";
      $img="";
      $resultado= $conexion->query('select * from cursos where id='.$_GET['id'])or die($conexion->error);
      $fila = mysqli_fetch_row($resultado);
      $nombre= $fila[1];
      $precio= $fila[4];
      $img= $fila[3];
      $arregloNuevo = array(
        'Id'=> $_GET['id'],
        'Nombre'=> $nombre,
        'Precio'=> $precio,
        'Imagen'=> $img
      );
      array_push($arreglo,$arregloNuevo);
      $_SESSION['carrito']=$arreglo;
    }
  }
}else{
  if(isset($_GET['id'])){
    $nombre="";
    $precio="";
    $img="";
    $resultado= $conexion->query('select * from cursos where id='.$_GET['id'])or die($conexion->error);
    $fila = mysqli_fetch_row($resultado);
    $nombre= $fila[1];
    $precio= $fila[4];
    $img= $fila[3];
    $arreglo[] = array(
      'Id'=> $_GET['id'],
      'Nombre'=> $nombre,
      'Precio'=> $precio,
      'Imagen'=> $img
    );
    $_SESSION['carrito']=$arreglo;
  }
}
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


<link rel="stylesheet" href="./carrito/css/magnific-popup.css">
<link rel="stylesheet" href="./carrito/css/jquery-ui.css">
<link rel="stylesheet" href="./carrito/css/owl.carousel.min.css">
<link rel="stylesheet" href="./carrito/css/owl.theme.default.min.css">


<link rel="stylesheet" href="./carrito/css/aos.css">

<link rel="stylesheet" href="./carrito/css/style.css">
  </head>
  <body>

      <!--RD Navbar-->
      <?php include "./header1.php"; ?>
      <!-- Breadcrumb default-->
      <section class="section section-sm bg-transparent">
        <div class="container">
                <!-- Breadcrumb-->
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php">Inicio</a></li>
                  <li class="breadcrumb-item"><span class="breadcrumb-text breadcrumb-active">Carrito</span></li>
                </ul>
        </div>
      </section>
      <!-- Registro-->
  <div class="site-wrap">
      <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <form class="col-md-12" method="post">
              <div class="site-blocks-table">
                <center>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="product-thumbnail">Imagen</th>
                      <th class="product-name">Curso</th>
                      <th class="product-price">Precio</th>
                      <th class="product-remove">Quitar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $total=0;
                      if(isset($_SESSION['carrito'])){
                        $arregloCarrito=$_SESSION['carrito'];
                        for($i=0;$i<count($arregloCarrito);$i++){
                          $total= $total+($arregloCarrito[$i]['Precio']);

                     ?>
                    <tr>
                      <td class="product-thumbnail">
                        <img src="images/<?php echo $arregloCarrito[$i]['Imagen']; ?>" alt="Image" class="img-fluid">
                      </td>
                      <td class="product-name">
                        <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['Nombre']; ?></h2>
                      </td>
                      <td>$<?php echo $arregloCarrito[$i]['Precio']; ?>MNX</td>

                      <td><a href="#" class="btn btn-primary btn-sm btnEliminar" data-id="<?php echo $arregloCarrito[$i]['Id']; ?>">X</a></td>
                    </tr>

                    <?php } } ?>
                  </tbody>
                </table>
              </center>
              </div>
            </form>
          </div>
<br>
<br>
          <div class="row">
            <div class="col-md-6">
              <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                  <a href="carritoc.php" class="btn btn-primary btn-sm btn-block">Actualizar carrito</a>
                </div>
                <div class="col-md-6">
                  <a href="index.php #cursos"class="btn btn-outline-primary btn-sm btn-block">Continuar comprando</a>
                </div>
              </div>

            </div>
            <div class="col-md-6 pl-5">
              <div class="row justify-content-end">
                <div class="col-md-7">
                  <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                      <h3 class="text-black h4 text-uppercase">Total</h3>
                    </div>
                  </div>

                  <div class="row mb-5">
                    <div class="col-md-6">
                      <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                      <strong class="text-black">$<?php echo $total;?>.00</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='compra.php'">Proceder a la compra</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


      <!-- Footer default-->
      <?php include "./footer1.php"; ?>
    </div>
    <div class="to-top int-arrow-up"></div>

    <script src="./carrito/js/jquery-3.3.1.min.js"></script>
    <script src="./carrito/js/jquery-ui.js"></script>
    <script src="./carrito/js/popper.min.js"></script>
    <script src="./carrito/js/bootstrap.min.js"></script>
    <script src="./carrito/js/owl.carousel.min.js"></script>
    <script src="./carrito/js/jquery.magnific-popup.min.js"></script>
    <script src="./carrito/js/aos.js"></script>
    <script src="./carrito/js/main.js"></script>
    <script>
    $(document).ready(function(){
      $(".btnEliminar").click(function(event){
        event.preventDefault();
        var id = $(this).data('id');
        var boton = $(this);

        $.ajax({
          method:'POST',
          url:"./eliminarCarrito.php",
          data:{
            id:id
          }
        }).done(function(respuesta){
          boton.parent('td').parent('tr').remove();
        });
      });
    });
    </script>


  </body>
</html>
