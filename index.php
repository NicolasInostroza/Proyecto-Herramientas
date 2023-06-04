<?php
    session_start();
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
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
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
            <div class="article-container" id="background" transition-style="in:circle:hesitate">
                <div class="card" style="background-color:#ffffff;">
                    <div class="card-body">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="imagenes/seleccionchilena.jpg" alt="Página en construcción" id="imagen-historia" class="d-block w-100 img-fluid">
                                    <p id="p-centrado">Escudo de la Federación de fútbol Chileno.</p><br>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="750" height="450" src="https://www.youtube.com/embed/ATXMJOEt6zc" title="YouTube video player" frameborder="20px" allow="accelerometer; 
                                    autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border: 2px solid white"></iframe>
                                    <p id="p-centrado">
                                    Resumen final "Copa América Chile 2015"<br>
                                    <b>Chile 0 (4) - Argentina 0 (1)</b><br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="card-deck d-flex flex-column" id="espacio_cartas_iz">
                    <div class="card" id="tamaño_cartas">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="text-align: center;">
                            <img src="imagenes/Chile_VS._Australia_(1cropped).jpg" class="img-thumbnail" id="imagen_noticia">
                        </div>
                      
                        <div class="card-body">
                            <h5 class="card-title"><b>Futuro incierto en el conjunto del Real Betis para el capitán Claudio Bravo</b></h5>
                            <p class="card-text" style="font-size: 13px;">
                                El arquero no cumplirá la cantidad de partidos con los que aseguraba su continuidad en los verdiblancos. Con esto, su futuro queda en el aire.
                            </p>                     
                            <button type="button" class="btn btn-primary">Leer más</button>
                        </div>
                    </div>
                    <div class="card" id="espacio_cartas_up">
                        <div class="card-body" id="tamaño_cartas">
                            <h5 class="card-title"><b>Con todo a por las proximas fechas de la FIFA</b></h5>
                            <p class="card-text" style="font-size: 10px;">
                            La selección chilena apunta con todo a la próxima Copa América 2024 y a las clasificatorias Mundial FIFA 2026
                            </p>
                      
                          <button type="button" class="btn btn-primary">Leer más</button>
                        </div>
                      </div>
                </div>
            </div>
            <div class="article-container" id="background" style="background-image: url(imagenes/estadio.jpg); padding: 30px;">
                <p id="parrafo-historia">
            La selección de fútbol chilena tiene una larga historia que se remonta al año 1910, cuando se fundó la Federación de Fútbol de Chile. 
            Desde entonces, la selección ha participado en varios torneos internacionales y ha obtenido algunos logros destacados.<br><br>
            Uno de los momentos más importantes de la historia de la selección chilena fue en el año 1962, cuando el país fue sede de la Copa del Mundo de la FIFA. 
            Chile logró llegar a las semifinales de la competición, donde fue eliminado por Brasil, que a la postre se coronó campeón.<br><br>
            En 1987, Chile fue derrotado en la final de la XXXIII edición de la Copa América por la selección Charrua, siendo esta la primera ocación en la que Chile pudo haberse consagrado campeón del fútbol latinoamericano.<br><br> 
            Luego, en 2015 y 2016, la selección chilena ganó dos ediciones consecutivas de la Copa América, convirtiéndose en la primera selección en lograr este hito desde que Argentina lo hiciera en 1946 y 1947.
            En cuanto a participaciones en Mundiales, Chile ha estado presente en nueve ocasiones, siendo su mejor resultado el mencionado tercer puesto en 1962. 
            En los últimos años, la selección chilena ha tenido un rendimiento irregular, pero siempre ha sido una de las selecciones más competitivas de Sudamérica y ha logrado mantenerse en el top 10 del ranking FIFA en varias ocasiones.
                </p>
            </div>
            <div style="text-align: center;">
                <img src="imagenes/escudo.png" id="imagenes-nosotros-centrada-escudo" alt="Escudo_Selección_Chilena">
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Logearse</h1>
                      <a href="recuperar.php" class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Olvide mi contraseña</a>
                    </div>
                    <form action = "login.php" method = "POST">
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
                        </div>
                    </form>
                  </div>
                </div>
              </div>
        </article>
        
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