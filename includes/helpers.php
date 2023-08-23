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

function getEntradas() {
    global $connectdb;
    
    $query = "SELECT id_entrada, e.nombre nombre, e.contenido contenido, e.fec_publicacion fec_publicacion, CONCAT(u.nombre, ' ', u.apellido) autor  FROM entrada e
    INNER JOIN usuario u
    ON e.id_autor = u.id_usuario
    ORDER BY fec_publicacion DESC";
    $execute_query = mysqli_query($connectdb, $query);

    return $execute_query;
}

function getEntrada($id_entrada) {
    global $connectdb;
    
    $query = "SELECT id_entrada, e.nombre nombre, e.contenido contenido, e.fec_publicacion fec_publicacion, CONCAT(u.nombre, ' ', u.apellido) autor  FROM entrada e
    INNER JOIN usuario u
    ON e.id_autor = u.id_usuario
    WHERE id_entrada = $id_entrada";
    $execute_query = mysqli_query($connectdb, $query);

    return $execute_query;
}



?>