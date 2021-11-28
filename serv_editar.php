<?php include 'template/header.php' ?>

<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=serv_error');
        exit();
    }
    include_once 'model/conexion.php';
    $id=$_GET['id'];

    $sentencia=$bd->prepare("SELECT * FROM servicio WHERE id=?;");
    $sentencia->execute([$id]);
    $servicio=$sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($servicio);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar Datos:
                </div>
                <form  class="p-4" method="POST" action="serv_editarServicio.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus value="<?php echo $servicio->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción:</label>
                        <input type="text" class="form-control" name="txtDescripcion" autofocus value="<?php echo $servicio->descripcion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen:</label>
                        <input type="text" class="form-control" name="txtImagen" autofocus value="<?php echo $servicio->imagen; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $servicio->id;?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>