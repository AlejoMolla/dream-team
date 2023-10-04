<?php include("../config.php") ?>
<?php require_once ROOT_PATH . '/db.php' ?>
<?php require_once ROOT_PATH . '/includes/header.php' ?>

<div class="container">
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
    <div class="row row-content" id="Fertilizantes">
        <div class="col-12 mb-2">
            <h2><span class="badge bg-primary">New</span> Fertilizantes</h2>
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
    <div class="row row-content" id="Maderas">
        <div class="col-12 mb-2">
            <h2><span class="badge bg-primary">New</span> Maderas</h2>
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
    <div class="row row-content" id="Cereales">
        <div class="col-12 mb-2">
            <h2><span class="badge bg-primary">New</span> Cereales</h2>
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

<?php include("../includes/footer.php") ?>