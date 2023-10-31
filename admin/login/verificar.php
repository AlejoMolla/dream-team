<?php

$codigo_de_acceso = "Tecnica-2";

if($_REQUEST['codigo'] == $codigo_de_acceso) {
	$_SESSION['admin'] = "success";
} else {
	echo "Codigo Incorrecto";
}

?>