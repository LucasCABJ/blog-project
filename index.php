<?php

    require_once('./connectdb.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempera | Blog de literatura</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <nav class="header__nav">    
            <div class="nav__logo-container">
                <a href="index.php" class="nav__logo-link">
                    <h1 class="nav__logo-title">Tempera</h1>
                </a>
            </div>
            <ul class="nav__navmenu">
                <li class="navmenu__item">
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-home navmenu__icon'></i>Inicio</a>
                </li>
                
                <li class="navmenu__item">
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-book navmenu__icon'></i>Categoria 1</a>
                </li>
                
                <li class="navmenu__item">
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-book navmenu__icon'></i>Categoria 2</a>
                </li>
                
                <li class="navmenu__item">
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-book navmenu__icon'></i>Categoria 3</a>
                </li>

                <li class="navmenu__item">
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-user navmenu__icon'></i>Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="main">

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
                        <p class="entrada__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos sint consequatur unde ea blanditiis ex dolorum optio voluptatum magni atque, quibusdam, delectus totam eum distinctio fuga suscipit fugit inventore consequuntur?</p>
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
                        <p class="entrada__description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos sint consequatur unde ea blanditiis ex dolorum optio voluptatum magni atque, quibusdam, delectus totam eum distinctio fuga suscipit fugit inventore consequuntur?</p>
                    </div>
                </div>

            </a>

        </section>

        <aside class="main__sidebar">
            <div class="sidebar__login">
                <h3 class='form__title'><i class='fa-solid fa-right-to-bracket form__icon'></i>Iniciar Sesion</h3>
                <form action="./pages/login.php" method="post" class="form__form">
                    <label for="email" class='form__label'>Email</label>
                    <input type="email" id="email" name="email" class='form__input'>
                    <label for="password" class='form__label'>Contraseña</label>
                    <input type="text" id="password" name="password" class='form__input'>
                    <input type="submit" value="Iniciar Sesion" class="form__submit">
                </form>
            </div>

            <div class="sidebar__register">
                <h3 class='form__title'><i class='fa-solid fa-address-card form__icon'></i>Registrarse</h3>
                <form action="./pages/register.php" method="post" class="form__form">
                    <label for="nombre" class='form__label'>Nombre</label>
                    <input type="text" id="nombre" name="nombre" class='form__input'>
                    <label for="apellido" class='form__label'>Apellido</label>
                    <input type="text" id="apellido" name="apellido" class='form__input'>
                    <label for="r_email" class='form__label'>Email</label>
                    <input type="email" id="r_email" name="r_email" class='form__input'>
                    <label for="password" class='form__label'>Contraseña</label>
                    <input type="text" id="password" name="password" class='form__input'>
                    <input type="submit" value="Registrarse" class="form__submit">
                </form>
            </div>
        </aside>


    </div>

    <!-- FOOTER -->
    <footer class='footer'>
            <p class="footer__text">Desarrollado por Lucas Caraballo &copy; 2023</p>
    </footer>

</body>
</html>