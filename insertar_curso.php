<?php
include "./conexion.php";

if (isset($_POST['nombre']) &&  isset($_POST['descripcion']) &&  isset($_POST['precio'])  &&  isset($_POST['certif'])) {
    $carpeta="./images/";
    $nombre = $_FILES['img']['name'];


    $temp= explode('.', $nombre);
    $extension= end($temp);

    $nombreFinal = time().'.'.$extension;

    if ($extension == 'jpg' || $extension == 'png') {
        if (move_uploaded_file($_FILES['img']['tmp_name'], $carpeta.$nombreFinal)) {
            $conexion->query("insert into cursos
                (nombre,descripcion,img,precio,certif) values
                (
                    '".$_POST['nombre']."',
                    '".$_POST['descripcion']."',
                    '$nombreFinal',
                    ".$_POST['precio'].",
                    '".$_POST['certif']."'
                    )
                   ")or die($conexion->error);
            header("Location: ./admin/cursos.php?success");
        } else {
            header("Location: ./admin/cursos.php?error=No se pudo subir la imagen");
        }
    } else {
        header("Location: ./admin/cursos.php?error=Favor de subir una imagen valida");
    }
} else {
    header("Location: ./admin/cursos.php?error=Favor de llenar todos los campos");
}
