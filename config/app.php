<?php

session_start();

define('APP_PATH', __DIR__ . '/..');
define('PUBLIC_PATH', 'http://localhost:8080/');

require_once 'database.php';
require_once 'routes.php';
require_once '../app/Libraries/Route.php';
require_once '../app/Libraries/View.php';

require_once '../app/Controllers/PageController.php';