<aside class="main__sidebar">
    <div class="sidebar__login">
        <h3 class='form__title'><i class='fa-solid fa-right-to-bracket form__icon'></i>Iniciar Sesion</h3>
        <form action="./pages/login.php" method="post" class="form__form">
            <label for="email" class='form__label'>Email</label>
            <input type="email" id="email" name="email" class='form__input'>
            <label for="password" class='form__label'>Contraseña</label>
            <input type="text" id="password" name="password" class='form__input'>
            <input type="submit" name='submit' value="Iniciar Sesion" class="form__submit">
        </form>
    </div>

    <div class="sidebar__register">
        <h3 class='form__title'><i class='fa-solid fa-address-card form__icon'></i>Registrarse</h3>
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
    </div>
</aside>