<?php

namespace App\Controllers;

use App\Models\m_jenis_vaksin;

class JenisVaksin extends BaseController
{
    public function __construct()
    {
        $this->m_jenis_vaksin = new m_jenis_vaksin();
    }
    public function index()
    {
        $data['jenis_vaksin'] = $this->m_jenis_vaksin->get_jenis_vaksin(); 
        return view('pages/jenis_vaksin/index', $data);
    }
    public function edit()
    {
        return view('pages/jenis_vaksin/edit');
    }
    public function create()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('pages/jenis_vaksin/create',$data);
    }
}
