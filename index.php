<?php include("config.php") ?>

<?php require_once ROOT_PATH . '/db.php' ?>

<?php require_once ROOT_PATH . '/includes/header.php' ?>

<div class="container">
    <div class="row row-content" id="Todos">
        <div class="col-12 mb-2">
            <h2><span class="badge bg-primary">New</span> Todos</h2>
        </div>

        <?php
            $productos = mysqli_query($conn, "SELECT * FROM productos");
            while($producto = mysqli_fetch_array($productos)) {?>
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">   
                <div class="card mb-sm-4" style="min-height: 400px">
                    <img style="height: 200px; object-fit: cover;" src="data:image/jpeg;base64,<?=base64_encode($producto['Imagen'])?>" alt="<?= $producto['Nombre']?>" class="card-img-top">
                    <div class="card-body d-body-flex">
                        <div>
                            <h4 class="card-title"><?= $producto['Nombre']?></h4>
                            <h6 class="text-success">Precio: <?= $producto['Precio']?></h6>
                            <p class="card-text">
                                <?= $producto['Descripcion']?>
                            </p>
                        </div>
                        <div class="d-flex align-items-end justify-content-between">
                            <a href="#" class="btn btn-primary <?php if($producto['Cantidad'] <= 0) echo "disabled"?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg>
                            </a>
                            <span class="badge text-bg-light fs-16 p-2 <?php if($producto['Cantidad'] <= 0) echo "text-danger"?>">
                                <?= $producto['Cantidad']?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <div class="row row-content" id="Recomendados">
        <div class="col-12 mb-2">
            <h2><span class="badge bg-primary">New</span> Recomendados</h2>
        </div>

        <?php for($i = 0; $i < 3; $i++) { ?>
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">   
                <div class="card">
                    <img src="https://media.mundotkm.com/p/b8ac06b97b0a1248f22b5d930b7e6844/adjuntos/345/imagenes/000/113/0000113067/790x0/smart/sportacus-473x400jpg.jpg" alt="Sportacus" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Sportacus</h4>
                        <p class="card-text">
                            Sportacus es alto capo, puede hacer muchas flexiones y distintos tipos de esta.
                        </p>
                        <a href="#" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <div class="row row-content" id="Promociones">
        <div class="col-12 mb-2">
            <h2><span class="badge bg-primary">New</span> Promociones</h2>
        </div>

        <?php for($i = 0; $i < 3; $i++) { ?>
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">   
                <div class="card">
                    <img src="https://media.mundotkm.com/p/b8ac06b97b0a1248f22b5d930b7e6844/adjuntos/345/imagenes/000/113/0000113067/790x0/smart/sportacus-473x400jpg.jpg" alt="Sportacus" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Sportacus</h4>
                        <p class="card-text">
                            Sportacus es alto capo, puede hacer muchas flexiones y distintos tipos de esta.
                        </p>
                        <a href="#" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
    <div class="row row-content" id="Materiales">
        <div class="col-12 mb-2">
            <h2><span class="badge bg-primary">New</span> Materiales</h2>
        </div>

        <?php for($i = 0; $i < 3; $i++) { ?>
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">   
                <div class="card">
                    <img src="https://media.mundotkm.com/p/b8ac06b97b0a1248f22b5d930b7e6844/adjuntos/345/imagenes/000/113/0000113067/790x0/smart/sportacus-473x400jpg.jpg" alt="Sportacus" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Sportacus</h4>
                        <p class="card-text">
                            Sportacus es alto capo, puede hacer muchas flexiones y distintos tipos de esta.
                        </p>
                        <a href="#" class="btn btn-primary">Visitar</a>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
</div>

<?php require_once ROOT_PATH . '/includes/footer.php' ?>
