<?php
include "./conexion.php";
if (isset($_POST['nivel'])) {


    $conexion->query("update usuario set
                        nivel='".$_POST['nivel']."'
                        where id=".$_POST['id']);

    header("Location: ./admin/usuarios.php?primary");
}
