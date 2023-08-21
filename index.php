<?php require_once('./includes/connectdb.php'); ?>

<?php require_once('./includes/helpers.php') ?>

<?php require_once('./includes/header.php')?>


    <section class="main__entradas">
        
        <h2 class="entradas__title">Ultimas publicaciones <i class="fa-solid fa-pen-to-square entradas__icon"></i></h2>
        
        <a href="www.google.com" target="_blank" class="entradas__entrada">

            <div class="entrada__img-container">
                <img src="./assets/img/post-01.webp" alt="Post Picture" class="entrada__img">
            </div>
            
            <div class="entrada__container">

                <div class="entrada__content">
                    <h2 class='entrada__title'>Con mamá</h2>
                    <h3 class='entrada__author'>Camila Vene</h3>
                    <p class='entrada__fecha'>2023-08-01</p>    
                    <p class="entrada__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos sint consequatur unde ea.</p>
                </div>
            </div>

        </a>

        <a href="www.google.com" target="_blank" class="entradas__entrada">

            <div class="entrada__img-container">
                <img src="./assets/img/post-01.webp" alt="Post Picture" class="entrada__img">
            </div>
            
            <div class="entrada__container">

                <div class="entrada__content">
                    <h2 class='entrada__title'>Con mamá</h2>
                    <h3 class='entrada__author'>Camila Vene</h3>
                    <p class='entrada__fecha'>2023-08-01</p>    
                    <p class="entrada__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos sint consequatur unde ea.</p>
                </div>
            </div>

        </a>

    </section>

<?php require_once('./includes/aside.php')?>        

<?php require_once('./includes/footer.php')?>