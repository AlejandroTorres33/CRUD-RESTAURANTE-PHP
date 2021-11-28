<?php
    include "template/header.php";  
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from restaurante where id=1;");
    $restaurante= $sentencia->fetchAll(PDO::FETCH_OBJ);

    $sentencia2 = $bd -> query("select * from empleado;");
    $empleados= $sentencia2->fetchAll(PDO::FETCH_OBJ);

    $sentencia3 = $bd -> query("select * from comentario;");
    $comentarios= $sentencia3->fetchAll(PDO::FETCH_OBJ);

    $sentencia4 = $bd -> query("select * from plato ;");
    $plato= $sentencia4->fetchAll(PDO::FETCH_OBJ);

    $sentencia5 = $bd -> query("select * from servicio ;");
    $servicio= $sentencia5->fetchAll(PDO::FETCH_OBJ);

    //print_r($cliente);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Un poco sobre nosotros</h2>
            <div class="card">
                <div class="card-header">Nuestra Historia</div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Conozcanos</th>
                            <th>Un poco de historia</th>
                        </tr>
                    </thead>
                    <?php
                        foreach($restaurante as $dato){}
                    ?>
                    <tbody>
                        <tr>
                            <th><img src="https://www.eluniversal.com.co/binrepository/1200x675/0c0/0d0/none/13704/EBKF/restaurante_3538118_20200825164948.jpg" width="400" height="300"> </th>
                            <th><?php echo $dato->nombre; ?><br><?php echo $dato->descripcion; ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>



            <h2>Nuestro equipo de trabajo</h2>
            <div class="card">
                <div class="card-header">Nuestro Personal</div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Conozcanos</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Restaurante en el que opera</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            foreach($empleados as $dato2){
                        ?>
                        <tr>
                            <th><?php echo $dato2->nombre; ?></th>
                            <th><?php echo $dato2->descripcion; ?></th>
                            <th><img src="https://definicion.de/wp-content/uploads/2019/06/perfildeusuario.jpg" alt=""></th>
                            <th><?php echo $dato2->restaurante_id; ?></th>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>



            <h2>¿Qué dicen nuestros clientes?</h2>
            <div class="card">
                <div class="card-header">Comentarios de clientes</div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Comentario</th>
                            <th>ID</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            foreach($comentarios as $dato3){
                        ?>
                        <tr>
                            <th><?php echo $dato3->id; ?></th>
                            <th><?php echo $dato3->comentario; ?></th>
                            <th><?php echo $dato3->cliente_id; ?></th>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <h2>Ofrecemos</h2>
            <div class="card">
                <div class="card-header">Platos</div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Restaurante ID</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            foreach($plato as $dato4){
                        ?>
                        <tr>
                            <th><?php echo $dato4->nombre; ?></th>
                            <th><?php echo $dato4->descripcion; ?></th>
                            <th><?php echo $dato4->imagen; ?></th>
                            <th><?php echo $dato4->restaurante_id; ?></th>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <h2>También</h2>
            <div class="card">
                <div class="card-header">Servicios</div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            foreach($servicio as $dato5){
                        ?>
                        <tr>
                            <th><?php echo $dato5->nombre; ?></th>
                            <th><?php echo $dato5->descripcion; ?></th>
                            <th><?php echo $dato5->imagen; ?></th>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <h2>También</h2>
            <div class="card">
                <div class="card-header">Servicios</div>
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            foreach($servicio as $dato5){
                        ?>
                        <tr>
                            <th><?php echo $dato5->nombre; ?></th>
                            <th><?php echo $dato5->descripcion; ?></th>
                            <th><?php echo $dato5->imagen; ?></th>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <br>
            <button><a href="gerente_index.php"> ADMINISTRAR </a></button>
            <br><br><br><br>


        </div>
    </div>
</div>
<br>
<br>

<?php
    include "template/footer.php";  
?>