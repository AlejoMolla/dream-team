<?php include("../../../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

	<div class="container-fluid px-md-5">
        <div class="row vh-100 align-items-center justify-content-sm-center">
            <?php require_once ROOT_PATH . '/components/nav.php' ?>

            <div class="col-12 col-sm-10 col-md-8 px-md-5">
            	<table class="table table-bordered">
            		<thead class="table-dark">
            			<tr>
            				<th>#</th>
            				<th>Nombre</th>
            				<th>Precio</th>
            				<th>Cantidad</th>
            				<th>Categoría</th>
            				<th>Acciones</th>
            			</tr>
            		</thead>
            		<tbody>
            				<?php
            				$productos = mysqli_query($conn, "SELECT * FROM productos");
            				while($producto = mysqli_fetch_array($productos)) {?>

        						<tr>
		            				<th style="width: 30px;">
		            					<div style="height: 30px; width: 30px;">
		            						<img src="data:image/jpeg;base64,<?=base64_encode($producto['Imagen'])?>" style="object-fit: cover; width: 100%; height: 100%;" />
		            					</div>
		            				</th>
		            				<td><?= $producto['Nombre']?></td>
		            				<td><?= $producto['Precio']?></td>
		            				<td><?= $producto['Cantidad']?></td>
		            				<td><?= $producto['Categoria_id']?></td>
		            				<td>
		            					<button class="btn btn-primary">
		            						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
											  	<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
											</svg>
		            					</button>
										<button class="btn btn-danger">
		            						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
											  	<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
											</svg>
		            					</button>
		            				</td>
		            			</tr>
 
            				<?php } ?>

            		</tbody>
            	</table>
            </div>
        </div>
    </div>