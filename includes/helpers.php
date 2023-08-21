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



?>