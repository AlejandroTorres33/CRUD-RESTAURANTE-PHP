<?php
    if(!isset($_GET['id'])){
        header('Location: gerente_index.php?mensaje=rest_error');
        exit();
    }

    include 'model/conexion.php';
    $id=$_GET['id'];
    $sentencia=$bd->prepare("DELETE FROM restaurante where id=?;");
    $resultado=$sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: gerente_index.php?mensaje=rest_eliminado');
    } else {
        header('Location: gerente_index.php?mensaje=rest_error');
    }
    
?>