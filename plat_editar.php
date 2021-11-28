<?php include 'template/header.php' ?>

<?php 
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=plat_error');
        exit();
    }
    include_once 'model/conexion.php';
    $id=$_GET['id'];

    $sentencia=$bd->prepare("SELECT * FROM plato WHERE id=?;");
    $sentencia->execute([$id]);
    $plato=$sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($plato);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar Datos:
                </div>
                <form  class="p-4" method="POST" action="plat_editarPlato.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus value="<?php echo $plato->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción:</label>
                        <input type="text" class="form-control" name="txtDescripcion" autofocus value="<?php echo $plato->descripcion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen:</label>
                        <input type="text" class="form-control" name="txtImagen" autofocus value="<?php echo $plato->imagen; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Restaurante:</label>
                        <input type="number" class="form-control" name="txtRestaurante_id" autofocus value="<?php echo $plato->restaurante_id; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $plato->id;?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>