<?php

namespace App\Controllers;

class Riwayat extends BaseController
{
    public function index()
    {
        return view('pages/riwayat/index');
    }
    public function show()
    {
        return view('pages/riwayat/show');
    }
}
