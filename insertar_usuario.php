<?php
include "./conexion.php";

if (isset($_POST['nombre']) &&  isset($_POST['apepat']) &&  isset($_POST['apemat']) &&  isset($_POST['telefono']) &&  isset($_POST['email']) &&  isset($_POST['password']) && isset($_POST['nivel'])) {


            $conexion->query("insert into usuario
                (nombre,apepat,apemat,telefono,email,password,nivel) values
                (
                    '".$_POST['nombre']."',
                    '".$_POST['apepat']."',
                    '".$_POST['apemat']."',
                    '".$_POST['telefono']."',
                    '".$_POST['email']."',
                    '".sha1($_POST['password'])."',
                    '".$_POST['nivel']."'
                    )
                   ")or die($conexion->error);
            header("Location: ./admin/usuarios.php?success");
        } else{


    header("Location: ./admin/usuarios.php?error=Favor de llenar todos los campos");
}
