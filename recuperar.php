<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up</title>
    <link rel="stylesheet" href="CSS/formularios.css">
    <link rel="stylesheet" href="CSS/banners-footers.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/ids.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color: #fcf6f2;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="grid-container">
        <header class="header-container sticky-top">
            <div class="logo-container">
                <img class="logo" src="imagenes/balon_copia.png">
            </div>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php" id="texto_nav">Inicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Nosotros.php" id="texto_nav">Nosotros</a>
                </li>
                    <?php if (isset($_SESSION['usuario'])){?>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="texto_nav"><?php $nombre = $_SESSION['usuario']->nombre;  echo "$nombre"; ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php" id="texto_nav">Logout</a>
                        </li>
                    <?php }else{?>
                <li>
                    <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" id="texto_nav">
                        Logearse
                    </a>
                </li>
                <?php }?>
            </ul>
        </header>
        <article id="eliminar-cuadrantes">
            <form action="usuarios/crear.php" method="POST">  
                <div class="container-form">  

                    <label>*Correo: </label>
                    <input type="email" name="correo" id="correo">

                    <label>*Password: </label>   
                    <input type="password" name="contraseña" id="contraseña">
                    
                    <label>*Repita Password : </label>   
                    <input type="password" name="contraseña" id="contraseña">  

                    <br><br><button type="submit" name="ingreso">Cambiar</button>    

                </div>   
            </form>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Logearse</h1>
                      <a href="recuperar.php" class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Olvide mi contraseña</a>
                    </div>
                    <div class="modal-body container-form-modal">
                        <div class="mb-3">
                            <label class="form-label">Nombre de Usuario</label>
                            <input type="text" placeholder="Enter Username" name="username" required> 
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label><br> 
                            <input type="password" placeholder="Enter Password" name="password" required>
                        </div>
                        <div>
                            <button type="submit" name="logeo">Login</button>
                            <br><input type="checkbox" checked="checked"> Recuerdame
                        </div>
                        <div>
                            <p>¿No tienes cuenta? Registrate!</p>
                            <button onclick="window.location.href='registro.php'">Registrarse</button> 
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </article>
        <aside class="right" id="ocultar"></aside>
        <footer>
            <p>
                Todos los derechos reservados &copy;
            </p>
            <div class="footer-container">
                <div class="footer-container-flex">
                    <p>Contacto: example@gmail.com</p>
                </div>
                <div class="footer-container-flex">
                    <p>Instagram: Iggenerico_cl</p>
                </div>          
            </div>
        </footer> 
    </div>
</body>

</html>