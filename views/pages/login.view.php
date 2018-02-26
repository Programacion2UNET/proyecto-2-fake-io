<?php include APP_PATH . '/views/partials/head.view.php' ?>
<?php include APP_PATH . '/views/partials/header.view.php' ?>

<section class="container">
    <div class="page_container">
        <div class="login_form">
            <form action="ingresar" method="POST" class="page_form">
                <div class="form_header">
                    <h2 class="form_title">Ingresar</h2>
                </div>            
                <div class="form_body">
                    <div class="form_item">
                        <label for="name"> Usuario </label>
                        <input id="name" name="username" type="name" placeholder="">
                    </div>
                    <div class="form_item">
                        <label for="password"> Contraseña </label>
                        <input id="password" name="password" type="password" placeholder="">
                    </div>
                </div>
                <div class="form_footer">
                    <input class="button button_primary" type="submit" value="Enviar">
                </div>
            </form>
            <?php 
                
                if(isset($error)) {
                    echo '<div class="login_error">'.$error.'</div>';
                }
            ?>
        </div>
    </div>
</section>

<?php include APP_PATH . '/views/partials/foot.view.php' ?>