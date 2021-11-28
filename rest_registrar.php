<?php
    print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtId']) || empty($_POST['txtNombre']) || empty($_POST['txtDescripcion'])){
        header('Location: gerente_index.php?mensaje=rest_falta');
        exit();
    }

    include_once 'model/conexion.php';
    $id=intval($_POST['txtId']);
    $nombre=$_POST['txtNombre'];
    $descripcion=$_POST['txtDescripcion'];

    $sentencia=$bd->prepare("INSERT INTO restaurante(id,nombre,descripcion) VALUES (?,?,?);");
    $resultado=$sentencia->execute([$id,$nombre,$descripcion]);

    if($resultado==TRUE){
        header('Location: gerente_index.php?mensaje=rest_registrado');
    }else{
        echo ('Location: gerente_index.php?mensaje=rest_error');
    }
?>