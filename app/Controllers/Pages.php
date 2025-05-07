<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index() {
        echo view('layouts/header');
        echo view('pages/homepage');
        echo view('layouts/footer');
    }

    public function about() {
        echo view('layouts/header');
        echo view('pages/about');
        echo view('layouts/footer');
    }
}