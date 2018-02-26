<?php

define('ROUTES', [
    ''                  => ['controller' => 'Page',     'action' => 'index'],
    'ingreso'           => ['controller' => 'Login',    'action' => 'index'],
    'ingreso/enviar'    => ['controller' => 'Login',    'action' => 'login'],
    'registro'          => ['controller' => 'Register', 'action' => 'index'],
    'registro/enviar'   => ['controller' => 'Register', 'action' => 'register']
]);