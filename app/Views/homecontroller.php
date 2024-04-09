<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load view untuk halaman beranda
        return view('home_view');
    }
}
