<?php

define('ROUTES', [
    ''                    => ['controller' => 'Page',     'action' => 'index'],
    'ingreso'             => ['controller' => 'Login',    'action' => 'index'],
    'ingreso/error'       => ['controller' => 'Login',    'action' => 'error'],     
    'ingreso/enviar'      => ['controller' => 'Login',    'action' => 'login'],
    'registro'            => ['controller' => 'Register', 'action' => 'index'],
    'registro/enviar'     => ['controller' => 'Register', 'action' => 'register'],
    'registro/completado' => ['controller' => 'Register', 'action' => 'success'],
    'inicio'              => ['controller' => 'Main',     'action' => 'index'],
    'salir'               => ['controller' => 'Login',    'action' => 'logout'],
]);