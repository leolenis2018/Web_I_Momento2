<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disponibles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php

    include("BaseDatos.php");

    //1. Crear un objeto de la clase BaseDatos
    $transaccion = new BaseDatos();

    //2. Crear la consulta SQL para buscar datos
    $consultaSQL = "SELECT * FROM motos WHERE 1";

    //3. Utilizar el metodo para consultarDatos()
    $motos = $transaccion->consultarDatos($consultaSQL);



    ?>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach ($motos as $moto) : ?>

                <div class="col mb-4">

                    <div class="card h-100">
                        <img src="<?php echo ($moto["foto"]) ?>" class="card-img-top" alt="imagen">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo ($moto["marca"]) ?></h3>
                            <p class="card-text"><?php echo ($moto["descripcion"]) ?></p>
                            <p class="card-text"><?php echo ($moto["precio"]) ?></p>
                            <a href="eliminarMotos.php?id=<?php echo ($moto["id_moto"]) ?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo ($moto["id_moto"]) ?>">
                                Editar
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="editar<?php echo ($moto["id_moto"]) ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edicion Moto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="editarMotos.php?id=<?php echo ($moto["id_moto"]) ?>" method="POST">
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="text" class="form-control" name="precioEditar" value="<?php echo ($moto["precio"]) ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <input type="text" class="form-control" name="descripcionEditar" value="<?php echo ($moto["descripcion"]) ?>">
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label class="font-weight-bold">Foto:</label>
                                                <input type="text" class="form-control" placeholder="foto URL" name="foto">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Guardar</button>

                                    </form>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            <?php endforeach ?>
        </div>
        <div class="">
            <a href="formularioRegistro.php?id=<?php echo ($moto["id_moto"]) ?>" class="btn btn-dark btn-lg btn-block">Agregar Nueva</a>
        </div>
    </div>

    <footer> Derechos Reservados &copy;</footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
</body>

</html>