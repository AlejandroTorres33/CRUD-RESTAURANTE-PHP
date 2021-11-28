<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    
?>
<h2>Sección de Empleados:</h2>
<?php include 'emp_index.php' ?>
<h2>Sección de Servicios:</h2>
<?php include 'serv_index.php' ?>
<h2>Sección de Restaurantes:</h2>
<?php include 'rest_index.php' ?>
<h2>Sección de Platos:</h2>
<?php include 'plat_index.php' ?>
<h2>Sección de Comentarios:</h2>
<?php include 'cli_index.php' ?>
<br>
<br>
<?php include 'template/footer.php' ?>