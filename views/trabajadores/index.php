<?php

    require_once "models/trabajadoresModel.php";
	$nuevo = new trabajadoresModel();
	$trabajadores = $nuevo->get();
    $cabecera = $nuevo->cabeceraTabla();
    // var_dump($cabecera);
    // exit(0);

?>
<!doctype html>
<html lang="es">

<?php require_once("template/partials/head.php") ?>

<body>
    <?php require_once("template/partials/menu.php") ?>

    <!-- Page Content -->
    <div class="container">
        <br><br><br><br>

        <?php require_once("template/partials/mensaje.php") ?>


        <!-- Estilo card de bootstrap -->
        <div class="card">
            <div class="card-header">
                Trabajadores registrados
            </div>
            <div class="card-body">
                <section>
                    <article>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <?php foreach ($cabecera as $key => $valor): ?>
                                    <th><?=$valor?></th>
                                    <?php endforeach;?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($trabajadores as $registro => $value):?>
                                <tr>
                                    <td><?=$value->id?></td>
                                    <td><?=$value->nombre?></td>
                                    <td><?=$value->apellidos?></td>
                                    <td><?=$value->email?></td>
                                    <td><?=$value->telefono?></td>
                                    <td><?=$value->direccion?></td>
                                    <td><?=$value->dni?></td>
                                    <td><?=$value->fechaNac?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        <h5>El número de trabajadores es: <?= count($trabajadores);?></h4>
                    </article>
                </section>

            </div>
        </div>
    </div>

    <!-- /.container -->

    <?php require_once("template/partials/footer.php") ?>
    <?php require_once("template/partials/javascript.php") ?>

</body>

</html>