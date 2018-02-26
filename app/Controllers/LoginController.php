<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\LoginModel;

class LoginController extends LoginModel {
    public function index() {
        View::render('pages/login');
    }

    public function login() {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if(empty($username) || empty($password)) {
            $error = 'Complete todos los campos';
            View::render('pages/login', compact('error'));
        } else {
            $user = LoginModel::loginModel($username, $password);

            if($user) {
                echo "Hola";
            } else {
                $error = 'Credenciales inválidas';
                View::render('pages/login', compact('error'));
                exit;
            }
        }
    }
}