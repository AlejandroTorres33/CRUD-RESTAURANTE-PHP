<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from plato");
    $plato= $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($plato);
?>


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!--Inicio de Alerta Advertencia-->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='plat_falta'){
            ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> Error</strong> Llena todos los campos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            <!--Fin Alerta-->

            <!--Inicio de Alerta Inserción-->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='plat_registrado'){
            ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Registrado.</strong> Se han agregado los datos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            <!--Fin Alerta-->

            <!--Inicio de Alerta Datos Error -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='plat_error'){
            ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Error.</strong> Hubo un error.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            <!--Fin Alerta-->
            <!--Inicio de Alerta Modificación -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='plat_editado'){
            ?>

            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong> Actualizado.</strong> Han cambiado los datos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            
            <!--Fin Alerta-->

            <!--Inicio de Alerta Eliminado -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='plat_eliminado'){
            ?>

            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <strong> Eliminado.</strong> Se ha eliminado el dato.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            
            <!--Fin Alerta-->

            <div class="card">
                <div class="card-header">
                    Lista de Platos
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Restaurante#</th>
                                <th scope="col" colspan="2">Operación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($plato as $dato){

                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato->id; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->descripcion; ?></td>
                                <td><?php echo $dato->imagen; ?></td>
                                <td><?php echo $dato->restaurante_id; ?></td>
                                <td ><a class="text-success" href="plat_editar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-pencil-square"> Editar</i></a></td>
                                <td onclick="return confirm('¿Esta seguro de eliminar?')"><a class="text-danger" href="plat_eliminar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-trash"> Eliminar</i></a></td>
                            </tr>

                            <?php
                                }                            
                            ?>

                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Ingresar Datos:
                </div>
                <form  class="p-4" method="POST" action="plat_registrar.php">
                    <div class="mb-3">
                        <label class="form-label">ID:</label>
                        <input type="number" class="form-control" name="txtId" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción:</label>
                        <input type="text" class="form-control" name="txtDescripcion" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Imagen:</label>
                        <input type="text" class="form-control" name="txtImagen" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ID Restaurante:</label>
                        <input type="number" class="form-control" name="txtRestaurante_id" autofocus>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>