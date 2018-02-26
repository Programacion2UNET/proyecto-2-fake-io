<?php include APP_PATH . '/views/partials/head.view.php' ?>
<?php include APP_PATH . '/views/partials/header.view.php' ?>

<section class="container">
    <div class="page_container">
        <div class="register_form">
            <form action="/registro/enviar" method="POST" class="page_form">
                <div class="form_header">
                    <h2 class="form_title">Registrarse</h2>
                </div>            
                <div class="form_body">

                    <div class="form_row">
                        <div class="form_item">
                            <label for="name"> Nombre del equipo </label>
                            <input id="name" name="team_name" type="text" placeholder="" required>
                        </div>
                        <div class="form_item">
                            <label for="code"> Nombre corto </label>
                            <input id="code" name="code" type="text" placeholder="" required>
                        </div>
                    </div>

                    <div class="form_row">
                        <div class="form_item">
                            <label for="date"> Fecha de creación </label>
                            <input id="date" name="date" type="date" required>
                        </div>
                        <div class="form_item">
                            <label for="address"> Dirección del responsable </label>
                            <input id="address" name="address" type="text" >
                        </div>
                    </div>

                    <div class="form_row">
                        <div class="form_item">
                            <label for="email"> Correo </label>
                            <input id="email" name="email" type="email" required>
                        </div>
                        <div class="form_item">
                            <label for="website"> Sitio web </label>
                            <input id="website" name="website" type="text" >
                        </div>
                    </div>

                    <div class="form_row">
                        <div class="form_item">
                            <label for="username"> Nombre de usuario </label>
                            <input id="username" name="username" type="name" required>
                        </div>
                        <div class="form_item">
                            <label for="password"> Contraseña </label>
                            <input id="password" name="password" type="password" placeholder="" required>
                        </div>
                    </div>

                </div>
                <div class="form_footer">
                    <input class="button button_primary" type="submit" value="Registrarse">
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