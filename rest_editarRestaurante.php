<?php
    //print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: gerente_index.php?mensaje=rest_error');
        exit();
    }
    include 'model/conexion.php';
    $id=$_POST['id'];
    $nombre=$_POST['txtNombre'];
    $descripcion=$_POST['txtDescripcion'];

    $sentencia=$bd->prepare("UPDATE restaurante SET nombre=?,descripcion=? where id=?");
    $resultado=$sentencia->execute([$nombre,$descripcion,$id]);

    if ($resultado===TRUE) {
        header('Location: gerente_index.php?mensaje=rest_editado');
    } else {
        header('Location: gerente_index.php?mensaje=rest_error');
    }
    
?>