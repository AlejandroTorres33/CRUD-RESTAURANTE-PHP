<?php
    print_r($_POST);
    if(empty($_POST['oculto']) || empty($_POST['txtId']) || empty($_POST['txtNombre']) || empty($_POST['txtDescripcion']) || empty($_POST['txtImagen']) || empty($_POST['txtRestaurante_id'])){
        header('Location: gerente_index.php?mensaje=emp_falta');
        exit();
    }

    include_once 'model/conexion.php';
    $id=intval($_POST['txtId']);
    $nombre=$_POST['txtNombre'];
    $descripcion=$_POST['txtDescripcion'];
    $imagen=$_POST['txtImagen'];
    $restaurante_id=intval($_POST['txtRestaurante_id']);

    $sentencia=$bd->prepare("INSERT INTO empleado(id,nombre,descripcion,imagen,restaurante_id) VALUES (?,?,?,?,?);");
    $resultado=$sentencia->execute([$id,$nombre,$descripcion,$imagen,$restaurante_id]);

    if($resultado==TRUE){
        header('Location: gerente_index.php?mensaje=emp_registrado');
    }else{
        echo ('Location: gerente_index.php?mensaje=emp_error');
    }
?>