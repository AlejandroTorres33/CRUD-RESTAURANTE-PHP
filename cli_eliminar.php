<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=cli_error');
        exit();
    }

    include 'model/conexion.php';
    $id=$_GET['id'];
    $sentencia=$bd->prepare("DELETE FROM cliente where id=?;");
    $resultado=$sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=cli_eliminado');
    } else {
        header('Location: index.php?mensaje=cli_error');
    }
    
?>