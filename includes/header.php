<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempera | Blog de literatura</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="shortcut icon" href="../assets/img/icon.ico" type="image/x-icon">
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <nav class="header__nav">    
            <div class="nav__logo-container">
                <a href="index.php" class="nav__logo-link">
                    <h1 class="nav__logo-title">TEMPERA</h1>
                </a>
            </div>
            <label for="menu-toggle" class="nav__toggle"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="menu-toggle">
            <ul class="nav__navmenu">
                <li class="navmenu__item">
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-home navmenu__icon'></i>Inicio</a>
                </li>

                <?php $categorias = getCategorias()?>
                <?php while($result = mysqli_fetch_assoc($categorias)):?>
                    <li class="navmenu__item navmenu__item-mobile">
                        <a href="../pages/categoria.php?id=<?=$result['id_categoria']?>" class="navmenu__link">
                            <i class='fa-solid fa-book navmenu__icon'></i>
                            <?=$result['nombre']?>
                        </a>
                    </li>
                    <?php endwhile; ?>
                
                <li class="navmenu__item" id='header__categorias'>
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-book navmenu__icon'></i>Categorias<i class="fa-solid fa-caret-down categorias__flecha"></i></a>
                    <div class="categorias__container">
                        <?php $categorias = getCategorias()?>
                        <?php while($result = mysqli_fetch_assoc($categorias)):?>
                            <a href="../pages/categoria.php?id=<?=$result['id_categoria']?>" class="categorias__categoria"><?=$result['nombre']?></a>
                        <?php endwhile; ?>
                    </div>
                </li>
                <li class="navmenu__item">
                    <a href="#" class="navmenu__link"><i class='fa-solid fa-user navmenu__icon'></i>Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="main">