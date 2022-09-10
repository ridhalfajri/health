<?php

namespace App\Controllers;

class Berita extends BaseController
{
    public function index()
    {
        return view('pages/berita/admin/index');
    }
    public function edit()
    {
        return view('pages/berita/admin/edit');
    }
    public function create()
    {
        return view('pages/berita/admin/create');
    }
}
