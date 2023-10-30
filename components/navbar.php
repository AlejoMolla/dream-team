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
                <!-- Button -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <?php /*Hacer que muestre Iniciar Sesión nomas si no está logeado, y que el carrito al pulsar te mande a iniciar sesión*/?>
                        <li><a href="/dream-team/pages/carrito/" class="dropdown-item">Carrito</a></li>
                        <li><a href="/dream-team/login/" class="dropdown-item">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>