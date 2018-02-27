<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\MainModel;

class MainController extends MainModel {
    public function index() {
        View::render('pages/login');
    }
}