<?php

    include_once "DB/conexion.php";

    if(isset($_POST['ingreso'])){
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $contraseña2 = $_POST['contraseña2'];

        $sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
        $query = mysqli_query($conexion,$sql);

        if($contraseña != $contraseña2){
            echo "<p class='alert alert-danger' style='text-align: center;'>Las contraseñas no coinciden</p>";
        }else{
            if($query->num_rows == 0){
                echo "<p class='alert alert-danger' style='text-align: center;'>Este correo no esta registrado</p>";
            }
            else{
                $query = mysqli_fetch_array($query);
                $row = $query[6];
                if($row == $correo){
                    $sql = "UPDATE usuarios SET contraseña = '$contraseña' WHERE correo = '$correo'";
                    $query = mysqli_query ($conexion, $sql); 
                    if ($query) {
                        Header("Location: ../index.php");
                        exit();
                    }
                }
            }
        }
    }
    
?>