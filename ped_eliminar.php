<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=ped_error');
        exit();
    }

    include 'model/conexion.php';
    $id=$_GET['id'];
    $sentencia=$bd->prepare("DELETE FROM pedido where id=?;");
    $resultado=$sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=ped_eliminado');
    } else {
        header('Location: index.php?mensaje=ped_error');
    }
    
?>