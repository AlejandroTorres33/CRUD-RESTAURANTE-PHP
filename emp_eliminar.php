<?php
    if(!isset($_GET['id'])){
        header('Location: gerente_index.php?mensaje=emp_error');
        exit();
    }

    include 'model/conexion.php';
    $id=$_GET['id'];
    $sentencia=$bd->prepare("DELETE FROM empleado where id=?;");
    $resultado=$sentencia->execute([$id]);

    if ($resultado === TRUE) {
        header('Location: gerente_index.php?mensaje=emp_eliminado');
    } else {
        header('Location: gerente_index.php?mensaje=emp_error');
    }
    
?>