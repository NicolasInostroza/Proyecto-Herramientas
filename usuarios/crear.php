<?php

include("conexion.php");

$nombre = $_POST["nombre"];
$email = $_POST["apellido"];
$rut = $_POST["rut"];
$username = $_POST["username"];
$contraseña = $_POST["contraseña"];
$correo = $_POST["correo"];
$fechanacimiento = $_POST["fechanacimiento"];

// Consulta SQL para insertar los datos en la tabla

$sql = "INSERT INTO usuarios (nombre, apellido, rut, username, contraseña, correo, fechanacimiento) 
VALUES ('$nombre', '$apellido', '$rut', '$username', '$contraseña', '$correo', '$fechanacimiento')";

mysqli_query ($conexion, $sql); 

if (mysqli_query($conect, $sql)) {
    Header("Location: registro.html");
} 

mysqli_close($conexion);

?>