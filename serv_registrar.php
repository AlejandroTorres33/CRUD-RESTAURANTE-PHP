<?php
    print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtId']) || empty($_POST['txtNombre']) || empty($_POST['txtDescripcion']) || empty($_POST['txtImagen'])){
        header('Location: gerente_index.php?mensaje=serv_falta');
        exit();
    }

    include_once 'model/conexion.php';
    $id=intval($_POST['txtId']);
    $nombre=$_POST['txtNombre'];
    $descripcion=$_POST['txtDescripcion'];
    $imagen=$_POST['txtImagen'];

    $sentencia=$bd->prepare("INSERT INTO servicio(id,nombre,descripcion,imagen) VALUES (?,?,?,?);");
    $resultado=$sentencia->execute([$id,$nombre,$descripcion,$imagen]);

    if($resultado==TRUE){
        header('Location: gerente_index.php?mensaje=serv_registrado');
    }else{
        echo ('Location: gerente_index.php?mensaje=serv_error');
    }
?>