<?php include("../../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$nacimiento = $_REQUEST['nacimiento'];
$genero = $_REQUEST['genero'];
$telefono = $_REQUEST['telefono'];
$correo = $_REQUEST['correo'];
$contraseña = $_REQUEST['contraseña'];

mysqli_query($conn,
	"INSERT INTO cliente(Nombre, Apellido, Correo, Contraseña, Genero, Telefono, FechaDeNacimiento)
	VALUES ('$nombre', '$apellido', '$correo', '$contraseña', '$genero', '$telefono', '$nacimiento')"
);

$_SESSION['islogged'] = 'true';
$_SESSION['user'] = $nombre . " " . $apellido;
header("Location: /dream-team/pages/login");

?>