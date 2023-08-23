<aside class="main__sidebar">

    <?php if(isset($_SESSION['user'])):?>
    
        <div class="sidebar__user-container">
        <div class="sidebar__user">
            
            <div class="sidebar__user-img-container">
                <img src="./assets/img/default-user.webp" alt="Profile pic" class="sidebar__user-img">
            </div>
            <div class='sidebar__username'>
                <h4 class='sidebar__username-text'><?=$_SESSION['user']['username']?></h4>
            </div>

        </div>
        <ul class='sidebar__user-options'>
            <li class="sidebar__option"><a href="#" class='sidebar__link'><i class='fa-solid fa-gear sidebar__link-icon'></i>Ajustes de cuenta</a></li>
            <li class="sidebar__option"><a href="./publicar_entrada.php" class='sidebar__link'><i class='fa-solid fa-pen sidebar__link-icon'></i>Escribir entrada</a></li>
            <li class="sidebar__option"><a href="#" class='sidebar__link'><i class='fa-solid fa-book sidebar__link-icon'></i>Crear categoria</a></li>
            <li class="sidebar__option"><a href="./pages/logout.php" class='sidebar__link logout-link'><i class='fa-solid fa-right-from-bracket sidebar__link-icon'></i>Cerrar Sesion</a></li>
        </ul>
    </div>


    <?php endif; ?>

    <?php if(!isset($_SESSION['user'])):?>

    <div class="sidebar__login">
        <h3 class='form__title'><i class='fa-solid fa-right-to-bracket form__icon'></i>Iniciar Sesion</h3>
        <?php if(isset($_SESSION['error_login'])):?>
            <?php $content = $_SESSION['error_login'];?>
            <?="<div class='alerta alerta-error'>$content</div>"?>
        <?php endif; ?>
        <form action="./pages/login.php" method="post" class="form__form">
            <label for="email" class='form__label'>Email</label>
            <input type="email" id="email" name="email" class='form__input'>
            <label for="password" class='form__label'>Contraseña</label>
            <input type="password" id="password" name="password" class='form__input'>
            <input type="submit" name='submit' value="Iniciar Sesion" class="form__submit">
        </form>
        <?php if(isset($_SESSION['error_login'])):?>
            <?php $_SESSION['error_login'] = null;?>
            <?php $content = null;?>
        <?php endif; ?>
    </div>

    <div class="sidebar__register">
        <h3 class='form__title'><i class='fa-solid fa-address-card form__icon'></i>Registrarse</h3>
        <?php if(isset($_SESSION['completado'])):?>
            <?php $sucess_alert = $_SESSION['completado'];?>
            <?="<div class='alerta alerta-success'>$sucess_alert</div>"?>
        <?php endif; ?>
        <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'general') : '' ?>
        <form action="./pages/register.php" method="post" class="form__form">
            <label for="nombre" class='form__label'>Nombre</label>
            <input type="text" id="nombre" name="nombre" class='form__input'>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ?>
            <label for="apellido" class='form__label'>Apellido</label>
            <input type="text" id="apellido" name="apellido" class='form__input'>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellido') : '' ?>
            <label for="r_email" class='form__label'>Email</label>
            <input type="email" id="r_email" name="email" class='form__input'>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ?>
            <label for="r_password" class='form__label'>Contraseña</label>
            <input type="password" id="r_password" name="password" class='form__input'>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ?>
            <label for="confirm_password" class='form__label'>Confirmar contraseña</label>
            <input type="password" id="confirm_password" name="confirm_password" class='form__input'>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : '' ?>
            <input type="submit" name='submit' value="Registrarse" class="form__submit">
        </form>
        <?php borrarErrores();?>
        <?php if(isset($_SESSION['completado'])):?>
            <?php $_SESSION['completado'] = null;?>
            <?php $sucess_alert = null;?>
        <?php endif; ?>
    </div>

    <?php endif;?>
</aside>