<?php include("../../config.php") ?>

<?php require_once ROOT_PATH . '/includes/head.php'?>

<?php

$codigo_de_acceso = "Tecnica-2";

if($_REQUEST['codigo'] == $codigo_de_acceso) {
	$_SESSION['admin'] = "success";
	header("Location: /dream-team/admin/");
} else { ?>
	<div class="container-fluid px-md-5">
    	<div class="row vh-100 align-items-center justify-content-sm-center">
        	<div class="col-12 col-md-4">
				<div class="p-5 rounded border">
					<h2 class="fw-bold text-center">Oops!</h2>
					<p class="fst-italic text-muted text-center">El codigo de acceso es incorrecto</p>
					<div class="d-grid">
						<button class="btn btn-danger" onclick="volver()">
							Volver
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function volver() {
			location.assign(location.origin + "/dream-team/admin/login");
		}
	</script>
<?php }

?>