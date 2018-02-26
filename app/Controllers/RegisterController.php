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
            'date'      => filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING),
            'address'   => filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING),
            'email'     => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
            'website'   => filter_input(INPUT_POST, 'website', FILTER_VALIDATE_URL),
        );
        $resp = $this->registerModel($data);
    }
}