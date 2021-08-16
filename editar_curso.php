<?php
include "./conexion.php";
if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['certif'])) {
    if ($_FILES['img']['name'] !='') {
        $carpeta="./images/";
        $nombre = $_FILES['img']['name'];

        $temp=explode('.', $nombre);
        $extension=end($temp);

        $nombreFinal = time().'.'.$extension;

        if ($extension == 'jpg' || $extension == 'png') {
            if (move_uploaded_file($_FILES['img']['tmp_name'], $carpeta.$nombreFinal)) {
                $fila = $conexion->query('select img from cursos where id='.$_POST['id']);
                $id = mysqli_fetch_row($fila);
                if (file_exists('./images/'.$id[0])) {
                    unlink('./images/'.$id[0]);
                }
                $conexion->query("update cursos set img='".$nombreFinal."' where id=".$_POST['id']);
            }
        }//llave tipo archivo
    }    //llave si no esta vacio

    $conexion->query("update cursos set
                        nombre='".$_POST['nombre']."',
                        descripcion='".$_POST['descripcion']."',
                        precio=".$_POST['precio'].",
                        certif='".$_POST['certif']."'
                        where id=".$_POST['id']);

    header("Location: ./admin/cursos.php?primary");
}
