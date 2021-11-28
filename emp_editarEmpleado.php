<?php
    //print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: gerente_index.php?mensaje=emp_error');
        exit();
    }
    include 'model/conexion.php';
    $id=$_POST['id'];
    $nombre=$_POST['txtNombre'];
    $descripcion=$_POST['txtDescripcion'];
    $imagen=$_POST['txtImagen'];
    $restaurante_id=$_POST['txtRestaurante_id'];

    $sentencia=$bd->prepare("UPDATE empleado SET nombre=?,descripcion=?,imagen=?,restaurante_id=? where id=?");
    $resultado=$sentencia->execute([$nombre,$descripcion,$imagen,$restaurante_id,$id]);

    if ($resultado===TRUE) {
        header('Location: gerente_index.php?mensaje=emp_editado');
    } else {
        header('Location: gerente_index.php?mensaje=emp_error');
    }
    
?>