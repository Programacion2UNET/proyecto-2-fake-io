<?php include APP_PATH . '/views/partials/head.view.php' ?>
<?php include APP_PATH . '/views/partials/header.view.php' ?>

<section class="container">
    <div class="login_form">
        <form action="ingresar" method="POST">
            <label>
                <span>Usuario</span>
                <input type="name" placeholder="Usuario">
            </label>
            <label>
                <span>Contraseña</span>
                <input type="password" placeholder="">
            </label>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</section>

<?php include APP_PATH . '/views/partials/foot.view.php' ?>