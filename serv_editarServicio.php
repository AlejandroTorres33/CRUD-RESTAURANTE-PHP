<?php
    //print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: gerente_index.php?mensaje=serv_error');
        exit();
    }
    include 'model/conexion.php';
    $id=$_POST['id'];
    $nombre=$_POST['txtNombre'];
    $descripcion=$_POST['txtDescripcion'];
    $imagen=$_POST['txtImagen'];

    $sentencia=$bd->prepare("UPDATE servicio SET nombre=?,descripcion=?,imagen=? where id=?");
    $resultado=$sentencia->execute([$nombre,$descripcion,$imagen,$id]);

    if ($resultado===TRUE) {
        header('Location: gerente_index.php?mensaje=serv_editado');
    } else {
        header('Location: gerente_index.php?mensaje=serv_error');
    }
    
?>