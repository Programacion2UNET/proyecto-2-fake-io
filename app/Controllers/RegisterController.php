<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\RegisterModel;

class RegisterController extends RegisterModel{
    public function index() {
        View::render('pages/register');
    }

    public function register() {
        $data = array(
            'team_name' => filter_input(INPUT_POST, 'team_name', FILTER_SANITIZE_STRING),
            'code'      => filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING),
            'date_add'  => filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING),
            'address'   => filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING),
            'email'     => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
            'website'   => filter_input(INPUT_POST, 'website', FILTER_SANITIZE_STRING),
            'username'  => filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING),
            'password'  => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING),
        );

        $resp = $this->registerModel($data);

       if($resp) {
           header('Location: /registro/completado');
       }
    }

    public function success() { 
        $msg = 'Registro completado con éxito';
        View::render('pages/login', compact('msg'));
    }
}