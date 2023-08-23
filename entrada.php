<?php require_once('./includes/connectdb.php'); ?>

<?php require_once('./includes/helpers.php') ?>

<?php require_once('./includes/header.php')?>

<section class="main__entradapage">

<?php if(isset($_GET['id'])): ?>
    <?php $entrada = getEntrada($_GET['id']); ?>
    <?php $result = mysqli_fetch_assoc($entrada); ?>
    <header class="entradapage__header">
        <div class="entradapage__img-container">
            <img src="https://picsum.photos/500" alt="Post image" class="entradapage__img">
        </div>
        <div class="entradapage__text">    
            <h1 class="entradapage__title"><?=$result['nombre']?></h1>
            <h3 class="entradapage__author"><span class="entradapage__author-pretext">Escrito por: </span><?=$result['autor']?></h3>
        </div>
    </header>
    <pre class="entradapage__content"><?=$result['contenido']?></pre>
<?php else:?>

<?php endif;?>

</section>

<?php require_once('./includes/aside.php')?>        

<?php require_once('./includes/footer.php')?>