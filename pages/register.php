<?php

if(isset($_POST)){

        require_once('../includes/connectdb.php');

        $nombre = !empty($_POST['nombre']) ? trim($_POST['nombre']) : false;
        $apellido = !empty($_POST['apellido']) ? trim($_POST['apellido']) : false;
        $email = !empty($_POST['email']) ? trim($_POST['email']) : false;
        $password = !empty($_POST['password']) ? $_POST['password'] : false;
        $confirm_password = !empty($_POST['confirm_password']) ? $_POST['confirm_password'] : false;

        $errores = [];

        if (!is_numeric($nombre) && !empty($nombre) && !preg_match("/[0-9]/", $nombre)) {
            $valid_nombre = true;
        } else {
            $valid_nombre = false;
            $errores['nombre'] = 'Nombre invalido.';
        }

        if (!is_numeric($apellido) && !empty($apellido) && !preg_match("/[0-9]/", $apellido)) {
            $valid_apellido = true;
        } else {
            $valid_apellido = false;
            $errores['apellido'] = 'Apellido invalido.';
        }

        if (!is_numeric($email) and filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $valid_email = true;
        } else {
            $valid_email = false;
            $errores['email'] = 'Email invalido.';
        }

        if($password != false && $confirm_password != false && $password == $confirm_password){
            $valid_password = true;
        } else{
            $valid_password = false;
            $errores['password'] = 'La contraseña esta vacia o no coinciden.';
        }

        if(count($errores) == 0) {

            $query = "SELECT * FROM usuario WHERE email = '$email'";
            $execute_query = mysqli_query($connectdb, $query);

            if($execute_query && mysqli_num_rows($execute_query) == 1) {

                $_SESSION['errores']['general'] = 'El correo ya se encuentra registrado.';

            } else {
                // Cifrado de contrasena

                $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
                
                $query = "INSERT INTO usuario VALUES(null, '$nombre', '$apellido', '$email', '$password_segura', CURDATE());";
                $execute_query = mysqli_query($connectdb, $query);
                
                if($execute_query) {
                    $_SESSION['completado'] = 'El registro se ha completado con exito.';
                } else {
                    $_SESSION['errores']['general'] = 'Fallo al registrar el usuario.';
                }
            }


        } else {
            $_SESSION['errores'] = $errores;         
        }
    }

    header('Location: ../index.php'); 

?>