<!DOCTYPE html>
<html lang="en-es">
  <head>
    <title>Inicio</title>
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
      <!-- Intro-->
      <section class="section section-lg bg-gradient-animated text-center d-flex align-items-center min-vh-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6" data-animate='{"class":"fadeInUp"}'>
              <h1>Internet de las cosas</h1>
              <p>¡Conoce más sobre IoT explorando este sitio web!</p>
              <div class="offset-md group-30"><a class="btn btn-lg btn-secondary" href="#journey" data-anchor-link="">Comenzar a explorar</a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Novi-->
      <section class="section section-lg bg-transparent" id="journey">
        <div class="container">
          <div class="row row-30 align-items-center justify-content-lg-between">
            <div class="col-sm-6 col-md-5 col-lg-4" data-animate='{"class":"fadeInLeft"}'>
              <h6 class="text-primary">Acerca de este sitio web</h6>
              <h1>Página creada en HTML</h1>
              <p>Este sitio web fue desarrollado a través de herramientas como HTML, CSS y haciendo uso de frameworks.</p>
            </div>
            <div class="col-xs-10 col-sm-6 col-md-7"><img class="shadow-lg" src="images/image-33-730x456.gif" alt="" width="730" height="456"/>
            </div>
          </div>
        </div>
      </section>
      <!-- Features-->
      <section class="section bg-transparent">
        <div class="container">
          <div class="row align-items-center slick-creative">
            <div class="col-md-7 d-md-flex flex-md-row-reverse">
              <div class="slick-slider slider-for slider-images" data-slick='{"arrows":false,"asNavFor":".slider-nav","adaptiveHeight":true}'>
                <div class="text-right"><img src="images/iot.png" alt="" width="1042" height="910"/>
                </div>
                <div class="text-right"><img src="images/iot2.png" alt="" width="1042" height="910"/>
                </div>
                <div class="text-right"><img src="images/iot3.png" alt="" width="1042" height="910"/>
                </div>
              </div>
            </div>
            <div class="col-md-5 pt-5" style="padding-bottom: 14.2%">
              <div class="pl-xxl-3">
                <h6 class="text-primary">Introducción a internet de las cosas</h6>
                <div class="slick-slider slider-nav" data-slick='{"arrows":false,"asNavFor":".slider-for","autoplay":true,"autoplaySpeed":3000,"focusOnSelect":true,"variableWidth":true}'>
                  <div class="slick-dot">¿Qué es IoT?</div>
                  <div class="slick-dot">¿Cómo funciona?</div>
                  <div class="slick-dot">Beneficios</div>
                </div>
                <div class="slick-slider slider-for" data-slick='{"arrows":false,"asNavFor":".slider-nav"}'>
                  <p>El Internet de las cosas (IoT) es el proceso que permite conectar elementos físicos cotidianos al Internet: desde
                    objetos domésticos comunes, hasta recursos para la atención de la salud;
                    también incluyen prendas y artículos personales.</p>
                  <p>El término IoT hace referencia a todos los sistemas de dispositivos físicos que reciben y transfieren datos a través de redes inalámbricas con poca intervención humana, lo cual es posible gracias a la integración de dispositivos informáticos en todo tipo de objetos.</p>
                  <p>Mayor eficiencia, innovación y productividad en el mundo de los negocios, con nuevos modelos y oportunidades que responden mejor a las necesidades de los ciudadanos.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Layouts-->
      <section class="section section-lg bg-gradient-animated"id=cursos>
        <div class="container-fluid">
          <h1 class="text-center" data-animate='{"class":"fadeInUp"}'>
            Nuestro producto estrella son los cursos de IoT<br class="d-none d-xs-block">
            ¡Conócelos!
          </h1>
          <div class="row row-30 row-md-40 row-lg-50 justify-content-center">
            <div class="col-xs-6 col-md-4 col-xl-auto" data-animate='{"class":"fadeInUp"}'>
              <?php
                include('./conexion.php');
                $resultado = $conexion ->query("select * from cursos order by id")or die($conexion-> error);
                while($fila = mysqli_fetch_array($resultado)){


              ?>
                    <!-- Layout-->
                    <article class="layout"><a class="layout-figure thumbnail-up-shadow" href="capi.php?id=<?php echo $fila['id'];?>"><img src="images/<?php echo $fila['img'];?>" alt="<?php echo $fila['nombre'];?>" width="336" height="450"/></a>
                      <div class="layout-title h6"><a class="layout-title-link" href="capi.php?id=<?php echo $fila['id'];?>"><?php echo $fila['nombre'];?></a><p><strong>$<?php echo $fila['precio'];?> MNX</strong></p>
                        <br>
                      </div>
                    </article>
            </div>



          </div>
                      <?php } ?>
        </div>
      </section>
      <!-- Decoration-->
      <section class="section section-lg bg-transparent text-center parallax-js">
        <div class="container">
          <div class="effect effect-tazza">
            <div class="effect-tazza-item-1">
              <div class="layer" data-depth=".1">
                <svg width="983" height="515" viewBox="0 0 983 515" fill="none">
                  <path opacity="0.2" d="M908 98.5C908 87.1782 917.178 78 928.5 78H955.5C966.822 78 976 87.1782 976 98.5C976 109.822 966.822 119 955.5 119H928.5C917.178 119 908 109.822 908 98.5Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M698 265C698 261.686 700.686 259 704 259H722C725.314 259 728 261.686 728 265V333C728 336.314 725.314 339 722 339H704C700.686 339 698 336.314 698 333V265Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M849 303C849 299.686 851.686 297 855 297H879C882.314 297 885 299.686 885 303V309C885 312.314 882.314 315 879 315H855C851.686 315 849 312.314 849 309V303Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M947 497C947 487.059 955.059 479 965 479C974.941 479 983 487.059 983 497C983 506.941 974.941 515 965 515C955.059 515 947 506.941 947 497Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M582 139.5C582 122.655 595.655 109 612.5 109C629.345 109 643 122.655 643 139.5C643 156.345 629.345 170 612.5 170C595.655 170 582 156.345 582 139.5Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M101 22.5C101 10.0736 111.074 0 123.5 0H176.5C188.926 0 199 10.0736 199 22.5C199 34.9264 188.926 45 176.5 45H123.5C111.074 45 101 34.9264 101 22.5Z" fill="#31C77F"></path>
                  <path opacity="0.25" d="M243 329C243 325.686 245.686 323 249 323H273C276.314 323 279 325.686 279 329V354C279 357.314 276.314 360 273 360H249C245.686 360 243 357.314 243 354V329Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M78 220C78 216.686 80.6863 214 84 214H137C140.314 214 143 216.686 143 220V268C143 271.314 140.314 274 137 274H84C80.6863 274 78 271.314 78 268V220Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M160 209C160 192.431 173.431 179 190 179H207C223.569 179 237 192.431 237 209C237 225.569 223.569 239 207 239H190C173.431 239 160 225.569 160 209Z" fill="#31C77F"></path>
                  <path opacity="0.2" d="M0 236C0 232.686 2.68629 230 6 230H21C24.3137 230 27 232.686 27 236V271C27 274.314 24.3137 277 21 277H6C2.68629 277 0 274.314 0 271V236Z" fill="#31C77F"></path>
                  <path opacity="0.1" d="M160 112C160 108.686 162.686 106 166 106H264C267.314 106 270 108.686 270 112V161C270 164.314 267.314 167 264 167H166C162.686 167 160 164.314 160 161V112Z" fill="#31C77F"></path>
                </svg>
              </div>
            </div>
            <div class="effect-tazza-item-2">
              <div class="layer" data-depth=".2">
                <svg width="854" height="496" viewBox="0 0 854 496" fill="none">
                  <path opacity="0.5" d="M530 6C530 2.68629 532.686 0 536 0H669C672.314 0 675 2.68629 675 6V105C675 108.314 672.314 111 669 111H536C532.686 111 530 108.314 530 105V6Z" fill="#31C77F"></path>
                  <path opacity="0.5" d="M421 158C421 154.686 423.686 152 427 152H448C451.314 152 454 154.686 454 158V189C454 192.314 451.314 195 448 195H427C423.686 195 421 192.314 421 189V158Z" fill="#31C77F"></path>
                  <path opacity="0.5" d="M393 451.5C393 440.73 401.73 432 412.5 432C423.27 432 432 440.73 432 451.5V476.5C432 487.27 423.27 496 412.5 496C401.73 496 393 487.27 393 476.5V451.5Z" fill="#31C77F"></path>
                  <path opacity="0.5" d="M789 364C789 360.686 791.686 358 795 358H848C851.314 358 854 360.686 854 364V395C854 398.314 851.314 401 848 401H795C791.686 401 789 398.314 789 395V364Z" fill="#31C77F"></path>
                  <path opacity="0.5" d="M700 83C700 79.6863 702.686 77 706 77H745C748.314 77 751 79.6863 751 83V114C751 117.314 748.314 120 745 120H706C702.686 120 700 117.314 700 114V83Z" fill="#31C77F"></path>
                  <path opacity="0.5" d="M0 345C0 341.686 2.68629 339 6 339H50C53.3137 339 56 341.686 56 345V372C56 375.314 53.3137 378 50 378H6C2.68629 378 0 375.314 0 372V345Z" fill="#31C77F"></path>
                  <path opacity="0.5" d="M37 408C37 395.297 47.2975 385 60 385H61C73.7025 385 84 395.297 84 408C84 420.703 73.7025 431 61 431H60C47.2975 431 37 420.703 37 408Z" fill="#31C77F"></path>
                  <path opacity="0.5" d="M19 225C19 219.477 23.4772 215 29 215C34.5228 215 39 219.477 39 225V241C39 246.523 34.5228 251 29 251C23.4772 251 19 246.523 19 241V225Z" fill="#31C77F"></path>
                </svg>
              </div>
            </div>
            <div class="effect-tazza-item-3">
              <div class="layer" data-depth=".3">
                <svg width="1118" height="534" viewBox="0 0 1118 534" fill="none">
                  <path d="M1004 225C1004 221.686 1006.69 219 1010 219H1027C1030.31 219 1033 221.686 1033 225V267C1033 270.314 1030.31 273 1027 273H1010C1006.69 273 1004 270.314 1004 267V225Z" fill="#31C77F"></path>
                  <path d="M565 390C565 386.686 567.686 384 571 384H620C623.314 384 626 386.686 626 390V442C626 445.314 623.314 448 620 448H571C567.686 448 565 445.314 565 442V390Z" fill="#31C77F"></path>
                  <path d="M1055 4.3125C1055 1.93077 1056.89 0 1059.23 0H1093.77C1096.11 0 1098 1.93077 1098 4.3125V41.6875C1098 44.0692 1096.11 46 1093.77 46H1059.23C1056.89 46 1055 44.0692 1055 41.6875V4.3125Z" fill="#31C77F"></path>
                  <path d="M900 43C900 28.6406 911.641 17 926 17C940.359 17 952 28.6406 952 43V76C952 90.3594 940.359 102 926 102C911.641 102 900 90.3594 900 76V43Z" fill="#31C77F"></path>
                  <path d="M745 313.5C745 308.253 749.253 304 754.5 304C759.747 304 764 308.253 764 313.5V330.5C764 335.747 759.747 340 754.5 340C749.253 340 745 335.747 745 330.5V313.5Z" fill="#31C77F"></path>
                  <path d="M1011 14.5C1011 9.25329 1015.25 5 1020.5 5C1025.75 5 1030 9.25329 1030 14.5V31.5C1030 36.7467 1025.75 41 1020.5 41C1015.25 41 1011 36.7467 1011 31.5V14.5Z" fill="#31C77F"></path>
                  <path d="M825 291C825 287.686 827.686 285 831 285H840C843.314 285 846 287.686 846 291V315C846 318.314 843.314 321 840 321H831C827.686 321 825 318.314 825 315V291Z" fill="#31C77F"></path>
                  <path d="M1075 385C1075 381.686 1077.69 379 1081 379H1112C1115.31 379 1118 381.686 1118 385V488C1118 491.314 1115.31 494 1112 494H1081C1077.69 494 1075 491.314 1075 488V385Z" fill="#31C77F"></path>
                  <path d="M858 335.5C858 319.208 871.208 306 887.5 306C903.792 306 917 319.208 917 335.5C917 351.792 903.792 365 887.5 365C871.208 365 858 351.792 858 335.5Z" fill="#31C77F"></path>
                  <path d="M290 60C290 56.6863 292.686 54 296 54H313C316.314 54 319 56.6863 319 60V76C319 79.3137 316.314 82 313 82H296C292.686 82 290 79.3137 290 76V60Z" fill="#31C77F"></path>
                  <path d="M0 80C0 65.6406 11.6406 54 26 54H39C53.3594 54 65 65.6406 65 80C65 94.3594 53.3594 106 39 106H26C11.6406 106 0 94.3594 0 80Z" fill="#31C77F"></path>
                  <path d="M298 509.5C298 503.701 302.701 499 308.5 499C314.299 499 319 503.701 319 509.5V523.5C319 529.299 314.299 534 308.5 534C302.701 534 298 529.299 298 523.5V509.5Z" fill="#31C77F"></path>
                  <path d="M180 335.5C180 318.655 193.655 305 210.5 305H281.5C298.345 305 312 318.655 312 335.5C312 352.345 298.345 366 281.5 366H210.5C193.655 366 180 352.345 180 335.5Z" fill="#31C77F"></path>
                </svg>
              </div>
            </div>
            <div class="effect-tazza-item-4">
              <div class="layer" data-depth=".4"><img src="images/image-39-639x439.png" alt="" width="639" height="439"/>
              </div>
            </div>
            <div class="effect-tazza-item-5">
              <div class="layer" data-depth=".5"><img src="images/image-38-1088x559.png" alt="" width="1088" height="559"/>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Users-->
      <section class="section section-lg bg-transparent">
        <div class="container">
          <div class="text-center" data-animate='{"class":"fadeInUp"}'>
            <h1>¡Tenemos más de <span class="text-primary"><span data-counter>1000</span>+</span> clientes!</h1>

          </div>
        </div>
      </section>
      <!-- Quote default-->

      <!-- Call to action-->

      <!-- Features-->

      <!-- Child themes-->
      <section class="section section-lg bg-transparent">
        <div class="container">
          <div class="row row-15 align-items-center flex-md-row-reverse">
            <div class="col-sm-6 col-md-5" data-animate='{"class":"fadeInRight"}'>
              <h6 class="text-primary">Próximamente...</h6>
              <h1>Vísitanos cada vez que puedas</h1>
              <p>Estamos certificándonos para ofrecer más cursos relacionados con la tecnología y las redes informáticas de la actualidad.</p>
            </div>
            <div class="col-sm-6 col-md-7" data-animate='{"class":"fadeInLeft"}'><img src="images/image-37-690x730.png" alt="" width="690" height="730"/>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer default extended-->
      <?php include "./footer1.php"; ?>
    </div>
    <div class="to-top int-arrow-up"></div>
  </body>
</html>
