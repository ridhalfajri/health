<?php

namespace App\Controllers;

use App\Models\m_lokasi_vaksin;
use App\Models\m_provinsi;

class LokasiVaksin extends BaseController
{
    public function __construct()
    {
        $this->m_lokasi_vaksin = new m_lokasi_vaksin();
        $this->m_provinsi = new m_provinsi();
    }
    public function index()
    {
        $data['lokasi_vaksin'] = $this->m_lokasi_vaksin->get_lokasi_vaksin(); 
        return view('pages/lokasi_vaksin/index', $data);
    }
    public function edit()
    {
        return view('pages/lokasi_vaksin/edit');
    }
    public function create()
    {
        $provinsi = $this->m_provinsi->get_all_provinsi();
        $data = [
            'provinsi' => $provinsi
        ];
        return view('pages/lokasi_vaksin/create',$data);
    }
}
