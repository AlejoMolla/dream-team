<?php include("../config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/head.php' ?>

<?php

if(isset($_SESSION['admin'])) { ?>

    <div class="container-fluid px-md-5">
        <div class="row vh-100 align-items-center">
            <?php require_once ROOT_PATH . '/components/nav.php' ?>
        </div>
    </div>

<?php } else {
    header("Location: /dream-team/admin/login/");
}

?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>