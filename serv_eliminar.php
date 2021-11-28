<?php
    if(!isset($_GET['id'])){
        header('Location: gerente_index.php?mensaje=serv_error');
        exit();
    }

    include 'model/conexion.php';
    $id=$_GET['id'];
    $sentencia=$bd->prepare("DELETE FROM servicio where id=?;");
    $resultado=$sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: gerente_index.php?mensaje=serv_eliminado');
    } else {
        header('Location: gerente_index.php?mensaje=serv_error');
    }
    
?>