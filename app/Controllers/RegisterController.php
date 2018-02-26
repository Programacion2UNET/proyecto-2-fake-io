<?php

namespace App\Controllers;

use App\Libraries\View;


class RegisterController {
    public function index() {
        View::render('pages/register');
    }

    public function register() {
        
    }
}