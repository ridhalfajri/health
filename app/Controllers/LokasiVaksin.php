<?php

namespace App\Controllers;

class LokasiVaksin extends BaseController
{
    public function index()
    {
        return view('pages/lokasi_vaksin/index');
    }
    public function edit()
    {
        return view('pages/lokasi_vaksin/edit');
    }
    public function create()
    {
        return view('pages/lokasi_vaksin/create');
    }
}
