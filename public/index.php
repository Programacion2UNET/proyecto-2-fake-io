<?php

require_once '../config/app.php';

use App\Libraries\Route;

$url = substr($_SERVER['REQUEST_URI'], 1) ?? '';
$route = ROUTES[$url] ?? false;

if ($route) {
    $controller = $route['controller'];
    $action = $route['action'];

    Route::any($controller, $action);

} else {
    header('HTTP/1.0 404 Not Found');
    die('Página no encontrada');
}

