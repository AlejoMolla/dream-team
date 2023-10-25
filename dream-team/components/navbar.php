<nav class="navbar navbar-expand-md bg-dark fixed-top" data-bs-theme="dark">
    <div class="container-fluid px-4">
        <a href="/<?= XAMPP_PATH?>/index.php" class="navbar-brand">Dream Team</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#collapseNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse Nav -->
        <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="collapseNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/<?= XAMPP_PATH?>/index.php" class="nav-link">Inicio</a>
                </li>
                <!-- Dropdown Item -->
                <li class="nav-item dropdown">
                    <a href="/<?= XAMPP_PATH?>/index.html#Todos" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        Productos
                    </a>
                    <!-- Dropdown List -->
                    <ul class="dropdown-menu">
                        <li><a href="/<?= XAMPP_PATH?>/index.php#Todos" class="dropdown-item">Todos</a></li>
                        <li><a href="/<?= XAMPP_PATH?>/index.php#Recomendados" class="dropdown-item">Recomendados</a></li>
                        <li><a href="/<?= XAMPP_PATH?>/index.php#Promociones" class="dropdown-item">Promociones</a></li>
                    </ul>
                </li>
                <!-- Dropdown Item -->
                <li class="nav-item dropdown">
                    <a href="index.php#Materiales" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        Materiales
                    </a>
                    <!-- Dropdown List -->
                    <ul class="dropdown-menu">
                        <li><a href="/<?= XAMPP_PATH?>/pages/materiales.php#Materiales" class="dropdown-item">Todos</a></li>
                        <li><a href="/<?= XAMPP_PATH?>/pages/materiales.php#Fertilizantes" class="dropdown-item">Fertilizantes</a></li>
                        <li><a href="/<?= XAMPP_PATH?>/pages/materiales.php#Maderas" class="dropdown-item">Maderas</a></li>
                        <li><a href="/<?= XAMPP_PATH?>/pages/materiales.php#Cereales" class="dropdown-item">Cereales</a></li>
                    </ul>
                </li>
                <!-- Button -->
                <button class="btn btn-outline-light">
                    Cerrar Sesión
                </button>
            </ul>
        </div>
    </div>
</nav>