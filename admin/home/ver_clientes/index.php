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
            				<th>Apellido</th>
            				<th>Correo</th>
            				<th>Contraseña</th>
            				<th>Género</th>
            				<th>Teléfono</th>
            				<th>Nacimiento</th>
            			</tr>
            		</thead>
            		<tbody>
            				<?php
            				$clientes = mysqli_query($conn, "SELECT * FROM cliente");
            				while($cliente = mysqli_fetch_array($clientes)) {?>

        						<tr>
		            				<th>
		            					<?= $cliente["Nombre"] ?>
		            				</th>
		            				<td>
		            					<?= $categoria['Apellido']?>
		            				</td>
		            				<td>
		            					<?= $categoria['Correo']?>
		            				</td>
		            				<td>
		            					<?= $categoria['Contraseña']?>
		            				</td>
		            				<td>
		            					<?= $categoria['Genero']?>
		            				</td>
		            				<td>
		            					<?= $categoria['Telefono']?>
		            				</td>
		            				<td>
		            					<?= $categoria['FechaDeNacimiento']?>
		            				</td>
		            			</tr>
 
            				<?php } ?>

            		</tbody>
            	</table>
            </div>
        </div>
    </div>