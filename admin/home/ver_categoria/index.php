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
            				<th>Nombre de la categoria</th>
            			</tr>
            		</thead>
            		<tbody>
            				<?php
            				$categorias = mysqli_query($conn, "SELECT * FROM categorias");
            				while($categoria = mysqli_fetch_array($categorias)) {?>

        						<tr>
		            				<th>
		            					<?= $categoria["Id"] ?>
		            				</th>
		            				<td><?= $categoria['Nombre']?></td>
		            				</td>
		            			</tr>
 
            				<?php } ?>

            		</tbody>
            	</table>
            </div>
        </div>
    </div>