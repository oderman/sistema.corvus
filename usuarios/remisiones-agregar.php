<?php
include("head.php");
?>
</head>

<body>
    <?php include("menu.php"); ?>

    <div class="container">

        <h2 class="mt-4 mb-4">Nuevo registro</h2>


        <div class="row justify-content-md-center">
            <div class="col col-lg-12">

                <?php include("alertas.php"); ?>

                <form action="remisiones-guardar.php" method="post">

                    <p class="lead text-danger">
                        (*) Algunos campos de este formulario son obligatorios.
                    </p>

                    <h4>Datos del cliente</h4>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Cliente <span style="color:red;">(*)</span></label>
                            <select name="cliente" class="form-control" required>
                                <option value="" selected>Escoja una opción...</option>
                                <?php
                                $clientes = $conexion->query("SELECT * FROM clientes");
                                while ($cli = $clientes->fetch_array()) {
                                ?>
                                    <option value="<?= $cli['cli_id']; ?>"><?= $cli['cli_nombre']; ?></option>
                                <?php }?>
                            </select>
                        </div>


                    </div>

                    <h4>Datos del equipo</h4>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label>Tipo de equipo</label>
                            <input type="text" class="form-control" name="equipo">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Referencia</label>
                            <input type="text" class="form-control" name="ref">
                        </div>

                        <div class="form-group col-md-4">
                            <label>Marca</label>
                            <input type="text" class="form-control" name="marca">
                        </div>

                    </div>



                    <button type="submit" class="btn btn-success"><i class="fa fa-credit-save" aria-hidden="true"></i> Guardar registro</button>

                </form>

            </div>


        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>