<?php require_once('./includes/connectdb.php'); ?>

<?php require_once('./includes/helpers.php') ?>

<?php require_once('./includes/header.php')?>

<?php

if (!isset($_SESSION['user'])) {
    header('Location: ./index.php');
}

?>

<section class="main__publicar-entrada">

    <header class="publicar-entrada__header">
        <h1 class='publicar-entrada__title'>Publicar entrada</h1>
    </header>

    <form action="#" class='publicar-entrada__form' method="POST">

        <label for="nombre" class="publicar-entrada__label">Titulo de la entrada</label>
        <input type="text" name="nombre" id='nombre' class='publicar-entrada__input'>
        
        <label for="nombre" class="publicar-entrada__label">Entrada</label>
        <textarea type="text" name="nombre" id='nombre' class='publicar-entrada__input'></textarea>

    </form>

</section>

<?php require_once('./includes/aside.php')?>        

<?php require_once('./includes/footer.php')?>