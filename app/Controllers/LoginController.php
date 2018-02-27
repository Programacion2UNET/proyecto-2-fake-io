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
                $_SESSION['user'] = array(
                    'team_name' => $user['team_name'],
                    'code'      => $user['code'],
                    'username'  => $user['username'],
                    'role'      => $user['role']
                );
                header('Location: /inicio');
            } else {
                header('Location: /ingreso/error');
            }
        }
    }

    public function error() {
        $error = 'Credenciales inválidas';
        View::render('pages/login', compact('error'));
    }
}