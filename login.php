<?php
    session_start();
    include_once "DB/conexion.php";

    $username = $_POST['username'];
    //$contraseña = password_hash($_POST['contraseña']);
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM usuarios WHERE username = '$username' and contraseña = '$contraseña'";

    $query = mysqli_query ($conexion, $sql);

    if ($query->num_rows == 0) {
        $_SESSION['errorLogin'] = "Nombre y/o contraseña no válidos.";
        Header("Location: index.php");
    }
    else{
        $query = mysqli_fetch_array($query);
        $row = $query[8];
        $_SESSION['usuario'] = (object) [
            'correo' => $query[6],
            'nombre' => $query[1],
            'apellido' => $query[2],
            'is_admin' => $query[8]
        ];
        if($row == 1){
            Header("Location: admin.php");
            exit();
        }
        else{
            Header("Location: index.php");
            exit();
        }

    } 
?>