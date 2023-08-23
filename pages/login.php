<?php

require_once('../includes/connectdb.php');

if(isset($_POST)) {
    
    var_dump($_POST);

    if(!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = (!is_numeric($_POST['email']) && filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL)) ? trim($_POST['email']) : false;

        $password = $_POST['password'];

        if($email != false) {

            $query = "SELECT * FROM usuario WHERE email = '$email'";
            $execute_query = mysqli_query($connectdb, $query);
            
            if($execute_query && mysqli_num_rows($execute_query) == 1) {

                $result = mysqli_fetch_assoc($execute_query);

                if($result['email'] == $email && password_verify($password, $result['password'])) {
                    
                    $usuario = ['username' => $result['nombre'] . ' ' . $result['apellido']];

                    $_SESSION['user'] = $usuario;

                    if(isset($_SESSION['error_login'])) {
                        $_SESSION['error_login'] = null;
                    }

                } else {
                    $_SESSION['error_login'] = 'Usuario y/o contraseña incorrectos.';
                }

            } else {
                $_SESSION['error_login'] = 'Usuario y/o contraseña incorrectos.';
            }

        } else {
            $_SESSION['error_login'] = 'Email invalido.';
        }

    } else {
        $_SESSION['error_login'] = 'Oh no... algo ha salido mal.';
    }

}

header('Location: ../index.php');

?>