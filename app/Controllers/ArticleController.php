<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\Article;

class ArticleController{

    public function index() {
        View::render('articles/index', compact('articles'));
    }

    public function show() {
        $id = $_GET['id'] ?? '';

        if (!empty($article)) {
            View::render('articles/show', compact('article'));

        } else {
            $this->index();
        }
    }
}