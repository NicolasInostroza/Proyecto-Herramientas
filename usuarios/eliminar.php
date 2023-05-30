<?php
    session_start();
    include_once "../DB/conexion.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $query = mysqli_query ($conexion, $sql); 

    if ($query) {
        Header("Location: ../admin.php");
        exit();
    } 
?>