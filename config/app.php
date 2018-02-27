<?php

session_start();

define('APP_PATH', __DIR__ . '/..');
define('PUBLIC_PATH', 'http://localhost:8080/');

require_once 'database.php';
require_once 'routes.php';
require_once '../app/Libraries/Route.php';
require_once '../app/Libraries/View.php';

require_once '../app/Models/Database.php';
require_once '../app/Models/LoginModel.php';
require_once '../app/Models/RegisterModel.php';
require_once '../app/Models/MainModel.php';

require_once '../app/Controllers/PageController.php';
require_once '../app/Controllers/RegisterController.php';
require_once '../app/Controllers/LoginController.php';
require_once '../app/Controllers/MainController.php';