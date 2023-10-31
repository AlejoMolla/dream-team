<?php include('../../config.php')?>
<?php require_once ROOT_PATH . '/db.php'?>

<?php

$correo = $_REQUEST['correo'];
$contraseña = $_REQUEST['contraseña'];

$registro = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM cliente WHERE cliente.Correo = '$correo'"));

?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

<div class="container-fluid px-md-5">
    <div class="row vh-100 align-items-center justify-content-sm-center">
        <div class="col-12 col-md-4">

        	<?php
        	if(isset($registro)) { 
        		if ($contraseña == $registro['Contraseña']) {
        			$_SESSION['logged'] = "success";
                    $_SESSION['usuario'] = $registro;
        			header("Location: " . "/dream-team/");
        		} else { ?>

        			<div class="p-5 border rounded">
        				<h2 class="fw-bold text-center">Oops!</h2>
        				<p class="fst-italic text-muted text-center">La contraseña es incorrecta.</p>
        				<div class="d-grid">
        					<button class="btn btn-danger" onclick="volver()">Volver</button>
        				</div>
        			</div>

        		<?php }
        	} else {
        	?>

        		<div class="p-5 border rounded">
        				<h2 class="fw-bold text-center">Oops!</h2>
        				<p class="fst-italic text-muted text-center">Correo incorrecto.</p>
        				<div class="d-flex justify-content-center gap-2">
        					<button class="btn btn-primary" onclick="registrar()">Registrarse</button>
        					<button class="btn btn-danger" onclick="volver()">Volver</button>
        				</div>
        			</div>

        	<?php } ?>
        	<script type="text/javascript">
        		function registrar() {
        			location.assign(location.origin + "/dream-team/pages/registro/");
        		}
        		function volver() {
        			window.location.assign(location.origin + "/dream-team/pages/login/");
        		}
        	</script>
        </div>
    </div>
</div>
