<?php include("../../config.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contenedor">
        <div class="section1">
            <img src="/<?= XAMPP_PATH?>/assets/images/logo.png" alt="" srcset="">
        </div>

        <div class="section2">
            <main class="form-signin w-100 m-auto">
                <form>
                    <h1 class="h3 mb-3 fw-normal titulo">Registrarse</h1>

                    <div class="costa form-floating">
                        <input type="name" class="form-control" id="floatingInput" placeholder="+54 9 9999 9999">
                        <label class="borde" for="floatingInput">Nombre y Apellido</label>
                    </div>

                    <div class="costa form-floating">
                        <input type="date" class="form-control" id="floatingInput" placeholder="">
                        <label class="" for="floatingInput">Fecha de Nacimiento</label>
                    </div>

                    <div class="costa form-floating">
                        <input type="gender" class="form-control" id="floatingInput" placeholder="">
                        <label class="borde" for="floatingInput">Género</label>
                    </div>

                    <div class="costa form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label class="borde" for="floatingInput">Correo electronico</label>
                    </div>

                    <div class="costa form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label class="borde" for="floatingPassword">Contraseña</label>
                    </div>
                    <h2>¿Ya tienes una cuenta? <a href="../login">Inicia sesion</a></h2>




                    <button class="btn btn-secondary costa w-100 py-2" type="submit">Registrarse Ahora</button>
                </form>
            </main>
        </div>
    </div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>