<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        // Load view untuk halaman tentang
        return view('about_view');
    }
}
