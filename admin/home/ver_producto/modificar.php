<?php include("../../../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

    <div class="container-fluid px-md-5">
        <div class="row vh-100 align-items-center justify-content-sm-center">
            <?php require_once ROOT_PATH . '/components/nav.php' ?>

            <div class="col-12 col-sm-10 col-md-8 px-md-5">

                <?php
                $id = $_REQUEST['id'];
                $producto = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM productos WHERE productos.id = $id"));
                ?>

                <form class="border rounded p-4 mt-5 mt-md-0" action="modificar.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Nombre:</label>
                        <div class="col-md-6">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre del Producto" class="form-control" required value="<?= $producto['Nombre']?>">
                        </div>
                        <div class="col-md-3">
                            <input type="file" class="form-control" name="imagen" id="imagen" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Precio:</label>
                        <div class="col-md-9">
                            <input type="number" name="precio" id="precio" placeholder="Precio del Producto" class="form-control" required value="<?= $producto['Precio']?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-md-3 form-label">Cantidad disponible:</label>
                        <div class="col-md-9">
                            <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad Disponible" class="form-control" required value="<?= $producto['Cantidad']?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="categoria" class="col-md-3 form-label">Categoría:</label>
                        <div class="col-md-9">
                            <select name="categoria" id="categoria" class="form-select">
                                <?php
                                $categorias = mysqli_query($conn, "SELECT * FROM categorias");
                                while($categoria = mysqli_fetch_array($categorias)) {?>

                                    <option value="<?= $categoria['Id']?>"><?= $categoria['Nombre']?></option>

                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="descripcion" class="col-md-3 form-label">Descripción:</label>
                        <div class="col-md-9">
                            <textarea name="descripcion" id="descripcion" placeholder="Descripción del Producto" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <input class="d-none" value="<?= $id?>" name="id" />
                    <input class="d-none" value="true" name="update" />
                    <div class="d-grid mt-3">
                        <button class="btn btn-primary" type="submit">
                            Modificar Producto
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php
        if(isset($_REQUEST["update"])) {
            $id = $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $precio = $_REQUEST['precio'];
            $cantidad = $_REQUEST['cantidad'];
            $descripcion = $_REQUEST['descripcion'];
            $imagen =  addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $categoria = $_REQUEST['categoria'];

            mysqli_query($conn, "
                UPDATE `productos` SET `Nombre` = '$nombre', `Precio` = '$precio', `Cantidad` = '$cantidad', `Descripcion` = '$descripcion', `Imagen` = '$imagen', `Categoria_id` = '$categoria' WHERE `productos`.`Id` = $id;
            ") or die("Problemas al realizar la consulta: " . mysqli_error($conn));?>
            <!-- Redirigir a pagina de ver_productos -->
            <script type="text/javascript">
                location.assign(`${location.origin}/dream-team/admin/home/ver_producto/`);
            </script>
        <?php }?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>