<?php include("../../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$nacimiento = $_REQUEST['nacimiento'];
$genero = $_REQUEST['genero'];
$telefono = $_REQUEST['telefono'];
$correo = $_REQUEST['correo'];
$contraseña = $_REQUEST['contraseña'];

$registro = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM cliente WHERE cliente.Correo = '$correo'"));

if(isset($registro)) { ?>
	
	<div class="container-fluid px-md-5">
    	<div class="row vh-100 align-items-center justify-content-sm-center">
        	<div class="col-12 col-md-4">
        		<div class="p-5 border rounded">
        			<h2 class="fw-bold text-center">Error</h2>
        			<p class="fst-italic text-muted text-center">Email ya registrado</p>
        			<div class="d-grid">
        				<button class="btn btn-danger" onclick="volver()">Volver</button>
        			</div>
        		</div>
        	</div>
        </div>
    </div>

    <script type="text/javascript">
    	function volver() {
    		location.assign(location.origin + "/dream-team/pages/registro/");
    	}
    </script>

<?php } else {
	mysqli_query($conn,
		"INSERT INTO cliente(Nombre, Apellido, Correo, Contraseña, Genero, Telefono, FechaDeNacimiento)
		VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$genero', '$telefono', '$nacimiento')"
	);

	header("Location: /dream-team/pages/login");
}

?>