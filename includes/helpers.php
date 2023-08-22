<?php

function mostrarError($errores, $key) {

    $alerta = '';

    if (isset($errores[$key])) {
        $error = $errores[$key];
        $alerta = "<div class='alerta alerta-error'>$error</div>";
    }

    return $alerta;

}

function borrarErrores() {

    $_SESSION['errores'] = null;

}

function getCategorias() {
    global $connectdb;
    
    $query = "SELECT * FROM categoria ORDER BY id_categoria ASC";
    $execute_query = mysqli_query($connectdb, $query);

    return $execute_query;
}



?>