<?php include("../../config.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bd73d7e981.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contenedor">
        <div class="section1">
            <img src="/<?= XAMPP_PATH?>/assets/images/logo.png" alt="" srcset="">
        </div>
  
        <div class="section2">
            <main class="form-signin w-100 m-auto">
                <form>
                    <h1 class="h3 mb-3 fw-normal titulo">Iniciar Sesion</h1>
    
                    <div class="costa form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label class="borde" for="floatingInput">Correo electronico</label> 
                    </div> 

                    <div class="costa form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label class="borde" for="floatingPassword">Contraseña</label>
                    </div>
                
                    <h2>¿No has iniciado sesion? <a href="../registro">Crea una cuenta</a></h2>
           
                    <div class="form-control costa ggl">
                        <i class="fa-brands fa-google" style="color: #000000;"></i> 
                        <a href="">Google</a>
                    </div> 
                    <div class="form-control costa fb">
                        <i class="fa-brands fa-facebook" style="color: #000000;"></i>
                        <a href="">Facebook</a>
                    </div>
                    <div class="form-control costa gh">
                        <i class="fa-brands fa-github" style="color: #000000;"></i>
                        <a href="">GitHub</a>
                    </div>
            
                    <button class="btn btn-secondary w-100 py-2" type="submit">Iniciar sesion</button>
                </form>
            </main>
        </div>
    </div>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
