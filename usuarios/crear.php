<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$username = $_POST['username'];
$contraseña = $_POST['contraseña'];
$correo = $_POST['correo'];
$fechan_nac = $_POST['fecha_nac'];

// Consulta SQL para insertar los datos en la tabla

$sql = "INSERT INTO usuarios VALUES ('$nombre', '$apellido', '$rut', '$username', '$contraseña', '$correo', '$fecha_nac')";

$query = mysqli_query ($conexion, $sql); 

if ($query) {
    Header("Location: index.html");
    exit();
} 

mysqli_close($conexion);

?>