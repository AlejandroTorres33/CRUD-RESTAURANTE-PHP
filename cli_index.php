<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from cliente");
    $cliente= $sentencia->fetchAll(PDO::FETCH_OBJ);

    $sentencia2 = $bd -> query("select * from comentario");
    $comentario= $sentencia2->fetchAll(PDO::FETCH_OBJ);

    $sentencia3 = $bd -> query("select * from pedido");
    $pedido= $sentencia3->fetchAll(PDO::FETCH_OBJ);

    $sentencia4 = $bd -> query("select * from reserva");
    $reserva= $sentencia4->fetchAll(PDO::FETCH_OBJ);
    //print_r($cliente);
?>


<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <!--Inicio de Alerta Datos Error -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='cli_error'){
            ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Error.</strong> Hubo un error.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            
            <!--Fin Alerta-->

            <!--Inicio de Alerta Eliminado -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='cli_eliminado'){
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
                    Lista de Clientes
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col" colspan="2">Operación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($cliente as $dato){

                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato->id; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->descripcion; ?></td>
                                <td><?php echo $dato->nombreusuario; ?></td>
                                <td><?php echo $dato->contrasena; ?></td>
                                <td onclick="return confirm('¿Esta seguro de eliminar?')"><a class="text-danger" href="cli_eliminar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-trash"> Eliminar</i></a></td>
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
            
            <!--Inicio de Alerta Datos Error -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='com_error'){
            ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Error.</strong> Hubo un error.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            
            <!--Fin Alerta-->

            <!--Inicio de Alerta Eliminado -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='com_eliminado'){
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
                    Lista de Comentarios
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Comentario</th>
                                <th scope="col">Cliente</th>
                                <th scope="col" colspan="2">Operación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($comentario as $dato2){

                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato2->id; ?></td>
                                <td><?php echo $dato2->comentario; ?></td>
                                <td><?php echo $dato2->cliente_id; ?></td>
                                <td onclick="return confirm('¿Esta seguro de eliminar?')"><a class="text-danger" href="cli_eliminar.php?id=<?php echo $dato2->id; ?>"><i class="bi bi-trash"> Eliminar</i></a></td>
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
            
            <!--Inicio de Alerta Datos Error -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='ped_error'){
            ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Error.</strong> Hubo un error.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            
            <!--Fin Alerta-->

            <!--Inicio de Alerta Eliminado -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='ped_eliminado'){
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
                    Lista de Pedidos
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Plato</th>
                                <th scope="col">Fecha</th>
                                <th scope="col" colspan="2">Operación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($pedido as $dato3){

                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato3->id; ?></td>
                                <td><?php echo $dato3->cliente_id; ?></td>
                                <td><?php echo $dato3->plato_id; ?></td>
                                <td><?php echo $dato3->fecha; ?></td>
                                <td onclick="return confirm('¿Esta seguro de eliminar?')"><a class="text-danger" href="ped_eliminar.php?id=<?php echo $dato3->id; ?>"><i class="bi bi-trash"> Eliminar</i></a></td>
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
            
            <!--Inicio de Alerta Datos Error -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='reserva_error'){
            ?>

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Error.</strong> Hubo un error.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
                }
            ?>
            
            <!--Fin Alerta-->

            <!--Inicio de Alerta Eliminado -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje']=='reserva_eliminado'){
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
                    Lista de Reservas
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Servicio</th>
                                <th scope="col">Fecha</th>
                                <th scope="col" colspan="2">Operación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($reserva as $dato4){

                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato3->id; ?></td>
                                <td><?php echo $dato3->cliente_id; ?></td>
                                <td><?php echo $dato3->servicio_id; ?></td>
                                <td><?php echo $dato3->fecha; ?></td>
                                <td onclick="return confirm('¿Esta seguro de eliminar?')"><a class="text-danger" href="reserva_eliminar.php?id=<?php echo $dato3->id; ?>"><i class="bi bi-trash"> Eliminar</i></a></td>
                            </tr>

                            <?php
                                }                            
                            ?>

                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>

        
    </div>
</div>