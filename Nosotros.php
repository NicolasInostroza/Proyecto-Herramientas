<?php
    session_start();
    include_once "DB/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vive La Roja</title>
    <link rel="stylesheet" href="CSS/formularios.css">
    <link rel="stylesheet" href="CSS/banners-footers.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/ids.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="background-color: #fcf6f2;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="grid-container">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Logearse</h1>
                      <a href="recuperar.php" class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Olvide mi contraseña</a>
                    </div>
                    <form action ="" method = "POST">
                        <div class="modal-body container-form-modal">
                            <div class="mb-3">
                                <label class="form-label">Nombre de Usuario</label>
                                <input type="text" placeholder="Enter Username" name="username" required> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label><br> 
                                <input type="password" placeholder="Enter Password" name="contraseña" required>
                            </div>
                            <div>
                                <button type="submit" name="logeo">Login</button>
                                <br><input type="checkbox" checked="checked"> Recuerdame
                            </div>
                            <div>
                                <p>¿No tienes cuenta? Registrate!</p>
                                <button onclick="window.location.href='registro.php'">Registrarse</button> 
                            </div>
                            <br>
                            <?php
                                include('login.php');
                            ?>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        <div id="eliminar-cuadrantes">
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
        </div>
        <aside style="visibility: hidden;"></aside>
        <article>
            <div class="container-sm">
                <div class="article-container-flex">
                    <div class="card  ">
                        <div class="card-body">
                          <p class="card-text" id="p-justify" style="font-size: 23px;">
                            Como página de la Selección Chilena, nos dedicamos a proporcionar información actualizada y completa sobre el equipo de fútbol más importante del país.<br><br>
                            Nuestro objetivo es ofrecer a los fanáticos de la Roja y al público en general, todo lo relacionado con la selección, desde sus partidos y resultados hasta las noticias y novedades más recientes sobre sus jugadores y cuerpo técnico.<br><br>
                            También publicamos contenido histórico y estadístico sobre la Selección Chilena, para que los aficionados puedan conocer más sobre la trayectoria de la Roja en competencias internacionales y su evolución a lo largo de los años.<br><br>
                    
                            En resumen, nuestra página de la Selección Chilena es un lugar para todos aquellos que aman el fútbol y quieren estar al tanto de todo lo que sucede con la 
                            selección nacional de Chile. Aquí encontrarás información actualizada y análisis de todo lo relacionado con la Roja.
                          </p><br>
                        </div>
                        <div class="imagen-container">
                            <img src="imagenes/escudo.png" id="imagenes-nosotros-centrada-escudo">
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <aside class="right" style="max-width: 400px;">
            <div class="d-flex flex-column">
                <div class="article-container-flex">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple imagenes-nosotros-centrada" data-mdb-ripple-color="light" style="text-align: center;">
                            <img src="imagenes/Alexis_Sánchez_2016.jpg" class="img-thumbnail" id="imagenes-nosotros-centrada" style="border-radius: 20px;">
                        </div>
                        <div class="card-body">
                            <p class="card-text" id="p-centrado">
                            "Alexis Sánchez"
                            </p>
                        </div>
                        <div class="bg-image hover-overlay ripple imagenes-nosotros-centrada" data-mdb-ripple-color="light" style="text-align: center;">
                            <img src="imagenes/ivan-zamorano-chile-inter-de-milan-el-18-de-junio-de-1998-h9j07n.jpg" class="img-thumbnail" id="imagenes-nosotros-centrada" style="border-radius: 20px;">
                        </div>
                        <div class="card-body" id="p-centrado">
                            <p class="card-text">
                            "BamBam Zamorano"
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </aside>
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