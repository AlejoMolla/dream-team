<?php include("../../../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

	<div class="container-fluid px-md-5">
        <div class="row vh-100 align-items-center justify-content-sm-center">
            <div class="col-12 col-md-4">
            	<!-- Obtiene el producto -->
            	<?php
	            	if(isset($_REQUEST['id'])) {
	            		$id = $_REQUEST['id'];
	            		$producto = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM productos WHERE productos.id = $id"));
	            	}
	            ?>

	            <form class="p-4 border rounded" action="borrar.php">
	            	<div class="mb-3">
	            		<label class="text-center">¿Estás seguro de que quieres eliminar el producto '<?= $producto['Nombre']?>'?</label>
	            		<!-- Al confirmar que se borre el producto, se envía el id y el delete al servidor -->
	            		<input class="d-none" type="text" value="<?= $id?>" name="id" />
	            		<input class="d-none" type="text" value="true" name="delete"/>
	            	</div>
	            	<div class="d-grid">
            			<button class="btn btn-danger">Confirmar</button>
            		</div>
	            </form>

	            <?php
	            	// Cuando se confirme, el producto se borra
	            	if(isset($_REQUEST['delete'])) {
	            		mysqli_query($conn, "DELETE FROM productos WHERE productos.id = $id");
	            		header('Location: ' . '/dream-team/admin/home/ver_producto/');
	            	}

	            ?>

            </div>
        </div>
    </div>