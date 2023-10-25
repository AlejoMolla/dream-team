<?php include("../../../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

    <div class="container-fluid px-md-5">
        <div class="row vh-100 align-items-center justify-content-sm-center">
            <?php require_once ROOT_PATH . '/components/nav.php' ?>

            <div class="col-12 col-sm-10 col-md-8 px-md-5">

                <form class="border rounded p-4 mt-5 mt-md-0" action="index.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Nombre de la categoria</label>
                        <div class="col-md-6">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre de la categoria" class="form-control" required>
                        </div>
                       
                    <div class="d-grid mt-3">
                        <button class="btn btn-primary" type="submit">
                            Ingresar categoria
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php
        if(isset($_REQUEST["nombre"])) {
            $nombre = $_REQUEST["nombre"];

            mysqli_query($conn, "
                INSERT INTO categorias(Nombre)
                VALUES ('$nombre');
            ") or die("Problemas al realizar la consulta: " . mysqli_error($conn));
        }
    ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>