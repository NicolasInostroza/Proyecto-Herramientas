<?php

    include_once "../DB/conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rut = $_POST['rut'];
    $username = $_POST['username'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    $fecha_nac = $_POST['fecha_nac'];

    $sql = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', rut = '$rut', username = '$username', contraseña = '$contraseña', correo = '$correo', fecha_nac = '$fecha_nac' WHERE id = '$id'";
    $query = mysqli_query ($conexion, $sql); 

    if ($query) {
        Header("Location: ../admin.php");
        exit();
    } 
?>