<?php

namespace App\Controllers;

class PendaftaranVaksin extends BaseController
{
    public function index()
    {
        return view('pages/pendaftaran/index');
    }
    public function test()
    {
        return view('pages/index');
    }
}
