<?php

namespace App\Controllers;

class JenisVaksin extends BaseController
{
    public function index()
    {
        return view('pages/jenis_vaksin/index');
    }
    public function edit()
    {
        return view('pages/jenis_vaksin/edit');
    }
    public function create()
    {
        return view('pages/jenis_vaksin/create');
    }
}
