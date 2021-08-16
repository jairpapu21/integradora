<?php
include "./conexion.php";

$fila = $conexion->query('select img from usuario where id='.$_POST['id']);
$id = mysqli_fetch_row($fila);

$conexion->query("delete from usuario where id=".$_POST['id']);
echo 'listo';

?>
