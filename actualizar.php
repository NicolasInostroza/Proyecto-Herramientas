<?php
    include_once "DB/conexion.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
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
        <header class="header-container">
            <div class="logo-container">
                <img class="logo" src="imagenes/balon_copia.png">
            </div>
            <div class="dropdown">
                <button class="dropbtn">Menú</button>
                <div class="dropdown-content">
                    <a type="button" class="dropbtn" href="index.html">Inicio</a>
                    <a type="button" class="dropbtn" href="Nosotros.html">Nosotros</a>
                    <button type="button" class="dropbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Logearse
                    </button>
                </div>
            </div>
        </header>
        <article id="eliminar-cuadrantes">
            <form action="usuarios/modificar.php" method="POST">  
                <div class="container-form"> 

                    <input type="hidden" name="id" value="<?php echo $row['id']?>">

                    <label>*Nombre: </label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']?>">

                    <label>*Apellidos: </label>
                    <input type="text" name="apellido" id="apellido" value="<?php echo $row['apellido']?>">

                    <label>*Rut: </label>
                    <input type="text" name="rut" id="rut" value="<?php echo $row['rut']?>">

                    <label>*Username : </label>   
                    <input type="text" name="username" id="username" value="<?php echo $row['username']?>">  

                    <label>*Password : </label>   
                    <input type="password" name="contraseña" id="contraseña" value="<?php echo $row['contraseña']?>">  

                    <label>*Correo: </label>
                    <input type="email" name="correo" id="correo" value="<?php echo $row['correo']?>">

                    <label>*Fecha de Nacimiento: </label>
                    <input type="date" name="fecha_nac" id="fecha_nac" value="<?php echo $row['fecha_nac']?>">

                    <br><br><button type="submit">Actualizar</button>    

                </div>   
            </form>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Logearse</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <button type="submit">Login</button>
                            <br><input type="checkbox" checked="checked"> Recuerdame
                        </div>
                        <div>
                            <p>¿No tienes cuenta? Registrate!</p>
                            <button onclick="window.location.href='registro.html'">Registrarse</button> 
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