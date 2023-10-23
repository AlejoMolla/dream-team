<?php include("../../../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

    <div class="container-fluid px-md-5">
        <div class="row vh-100 align-items-center justify-content-sm-center">
            <?php require_once ROOT_PATH . '/components/nav.php' ?>

            <div class="col-12 col-sm-10 col-md-8 px-md-5">

                <form class="border rounded p-4 mt-5 mt-md-0" action="index.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Nombre:</label>
                        <div class="col-md-6">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre del Producto" class="form-control" required>
                        </div>
                        <div class="col-md-3">
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Precio:</label>
                        <div class="col-md-9">
                            <input type="number" name="precio" id="precio" placeholder="Precio del Producto" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Cantidad disponible:</label>
                        <div class="col-md-9">
                            <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad Disponible" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="categoria" class="col-md-3 form-label">Categoría:</label>
                        <div class="col-md-9">
                            <select name="categoria" id="categoria" class="form-select">
                                <option selected>Categoría</option>
                                <option value="Fertilizantes">Fertilizantes</option>
                                <option value="Cereales">Cereales</option>
                                <option value="Maderas">Maderas</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Descripción:</label>
                        <div class="col-md-9">
                            <textarea name="descripcion" id="descripcion" placeholder="Descripción del Producto" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="d-grid mt-3">
                        <button class="btn btn-primary" type="submit">
                            Ingresar Producto
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php
        if(isset($_REQUEST["nombre"])) {
            $nombre = $_REQUEST["nombre"];
            $precio = $_REQUEST["precio"];
            $cantidad = $_REQUEST["cantidad"];
            $descripcion = $_REQUEST["descripcion"];
            $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $categoria = $_REQUEST["categoria"];

            mysqli_query($conn, "
                INSERT INTO productos(Nombre, Precio, Cantidad, Descripcion, Imagen, Categoria_id)
                VALUES ('$nombre', '$precio', '$cantidad', '$descripcion', '$imagen', '$categoria');
            ") or die("Problemas al realizar la consulta: " . mysqli_error($conn));
        }
    ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>