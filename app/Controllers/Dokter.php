<?php

namespace App\Controllers;

class Dokter extends BaseController
{
    public function index()
    {
        return view('pages/dokter/index');
    }
    public function create()
    {
        return view('pages/dokter/create');
    }
    public function edit()
    {
        return view('pages/dokter/edit');
    }
}
