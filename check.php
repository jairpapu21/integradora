<?php
session_start();
include "./conexion.php";
if(isset($_POST['email']) && isset($_POST['password'])){
  $resultado = $conexion->query("select * from usuario where
  email='".$_POST['email']."' and
  password='".sha1($_POST['password'])."' limit 1")or die($conexion->error);
  if(mysqli_num_rows($resultado)>0){
    $datos_usuario = mysqli_fetch_row($resultado);
    $id_usuario = $datos_usuario[0];
    $nombre = $datos_usuario[1];
    $apepat = $datos_usuario[2];
    $apemat = $datos_usuario[3];
    $telefono = $datos_usuario[4];
    $email = $datos_usuario[5];
    $nivel = $datos_usuario[7];

    $_SESSION['datos_login']= array(
      'id_usuario'=>$id_usuario,
      'nombre'=>$nombre,
      'apepat'=>$apepat,
      'apemat'=>$apemat,
      'telefono'=>$telefono,
      'email'=>$email,
      'nivel'=>$nivel
    );
    
    header("Location: ./admin/index.php");
  }else{
    header("Location: ./login.php?error=Credenciales incorrectas");
  }
}else{
header("Location: ./login.php");
}
 ?>
