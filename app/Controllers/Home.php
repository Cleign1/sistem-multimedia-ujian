<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {
        // Load any necessary libraries or helpers here
        helper(['url', 'html']);
    }

    public function index(): string
    {
        return view('homepage');
    }

}
