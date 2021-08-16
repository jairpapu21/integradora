<?php
  $servidor="localhost";
  $nombreBd="integradora";
  $usuario="root";
  $pass="12345678";
  $conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
  if($conexion -> connect_error){
    die("No es posible conectar");
  }
?>
