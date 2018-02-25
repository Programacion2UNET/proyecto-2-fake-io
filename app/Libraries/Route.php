<?php

namespace App\Libraries;

class Route {
    public static function any($controller = null, $action = 'index') {

        if ($controller) {
            $controller = "\\App\\Controllers\\{$controller}Controller";
            $controller = new $controller;
        } else {
            $controller = "\\App\\Controller\\PageController";
            $controller = new $controller;
        }

        if (method_exists($controller, $action)) {
            return $controller->$action();
            
        } else {
            header('HTTP/1.0 404 Not Found');
            die('Página no encontrada');
        }
    }
}