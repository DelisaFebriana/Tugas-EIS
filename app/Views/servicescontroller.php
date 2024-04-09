<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        // Load view untuk halaman layanan
        return view('services_view');
    }
}
