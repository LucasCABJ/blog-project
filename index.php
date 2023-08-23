<?php require_once('./includes/connectdb.php'); ?>

<?php require_once('./includes/helpers.php') ?>

<?php require_once('./includes/header.php')?>


    <section class="main__entradas">
        
        <h2 class="entradas__title">Ultimas publicaciones <i class="fa-solid fa-pen-to-square entradas__icon"></i></h2>
        
        <div class="main__entradas-container">

            
            <?php $entradas = getEntradas(); ?>
            <?php while($entrada = mysqli_fetch_assoc($entradas)): ?>

                <a href="./entrada.php?id=<?=$entrada['id_entrada']?>" class="entradas__entrada">

                <div class="entrada__img-container">
                    <img src="https://picsum.photos/seed/picsum/200/300" alt="Post Picture" class="entrada__img">
                </div>

                <div class="entrada__container">

                    <div class="entrada__content">
                        <h2 class='entrada__title'><?=$entrada['nombre']?></h2>
                        <h3 class='entrada__author'><?=$entrada['autor']?></h3>
                        <p class='entrada__fecha'><?=$entrada['fec_publicacion']?></p>
                    </div>

                </div>

                </a>

            <?php endwhile; ?>

        </div>

    </section>

<?php require_once('./includes/aside.php')?>        

<?php require_once('./includes/footer.php')?>