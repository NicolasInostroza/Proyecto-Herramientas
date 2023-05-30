<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "Herramientas";

$conexion = new mysqli($server, $user, $password, $db);
if ($conexion->connect_errno) {
    die("Conexión fallida: ".$conexion->connect_errno);
}
?>