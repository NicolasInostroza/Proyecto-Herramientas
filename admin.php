<?php
    session_start();
    include_once "DB/conexion.php";

    $sql = "SELECT * FROM usuarios";
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
        <header class="header-container sticky-top">
            <div class="logo-container">
                <img class="logo" src="imagenes/balon_copia.png">
            </div>
            <div class="dropdown">
                <button class="dropbtn">Menú</button>
                <div class="dropdown-content">
                    <a type="button" class="dropbtn" href="index.php">Inicio</a>
                    <a type="button" class="dropbtn" href="Nosotros.php">Nosotros</a>
                    <?php if (isset($_SESSION['usuario'])){?>
                        <a type="button" class="dropbtn" href="logout.php">Logout</a>
                    <?php }else{?>
                    <button type="button" class="dropbtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Logearse
                    </button>
                    <?php }?>
                </div>
            </div>
        </header>
        <article id="eliminar-cuadrantes">
            <div class="card" style="margin: 40px">
                <h5 class="card-header text-bg-info p-3">Usuarios</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">APELLIDO</th>
                                <th scope="col">RUT</th>
                                <th scope="col">USERNAME</th>
                                <th scope="col">CONTRASEÑA</th>
                                <th scope="col">CORREO</th>
                                <th scope="col">FECHA DE NACIMIENTO</th>
                                <th scope="col">ADMINISTRADOR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['apellido']?></th>
                                    <th><?php echo $row['rut']?></th>
                                    <th><?php echo $row['username']?></th>
                                    <th><?php echo str_repeat("*", strlen($row['contraseña']))?></th>
                                    <th><?php echo $row['correo']?></th>
                                    <th><?php echo $row['fecha_nac']?></th>
                                    <th><?php echo $row['is_admin']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['id']?>" class="btn btn-primary">Modificar</a></th>
                                    <th><a href="usuarios/eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Logearse</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <button type="submit">Login</button>
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
        <footer id="footer-exclusivo">
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