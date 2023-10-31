<?php include('../../config.php')?>

<?php

if(isset($_REQUEST['logout'])) {
	session_destroy();
	header("Location: /dream-team/pages/login/");
}

?>