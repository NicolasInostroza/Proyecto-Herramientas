<?php
    session_start();
    include_once "../DB/conexion.php";

    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];

    if($contraseña == $contraseña2){
        $sql = "UPDATE usuarios SET contraseña = '$contraseña' WHERE correo = '$correo'";
        $query = mysqli_query ($conexion, $sql); 
        if ($query) {
            Header("Location: ../index.php");
            exit();
        }
    }else{
        Header("Location: ../recuperar.php");
    }
    
?>