<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin'); 
    }

    public function admin_akun()
    {
        return view('admin_akun');
    }

    public function admin_rps()
    {
        return view('admin_rps');
    }
}
