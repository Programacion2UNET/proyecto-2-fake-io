<header class="header">
    <div class="container">
        <nav class="header_nav">
            <h1 class="header_title">
                <a href="/">Fake tournaments</a> 
            </h1>
            <ul class="header_menu">
                <?php 
                    if(!isset($_SESSION['user'])) {
                        echo '  <li class="header_menu_item"> 
                                    <a class="header_menu_link" href="/ingreso">Ingresar</a>
                                </li>
                                <li class="header_menu_item"> 
                                    <a class="header_menu_link" href="/registro">Registro</a> 
                                </li>"
                                ';
                    } else {
                        echo '  <li class="header_menu_item"> 
                                    <a class="header_menu_link" href="javascript:void(0)">'.$_SESSION['user']['username'].'</a>
                                </li>
                                
                                <li class="header_menu_item"> 
                                    <a class="header_menu_link" href="/inscripcion">Inscripción</a>
                                </li>
                                <li class="header_menu_item"> 
                                    <a class="header_menu_link" href="/salir">Salir</a> 
                                </li>
                                ';
                    }
                ?>
            </ul>
        </nav>
    </div>
</header>