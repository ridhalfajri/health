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
            'provinsi' => $provinsi,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/lokasi_vaksin/create',$data);
    }
    public function store()
    {
        if (!$this->validate([
            'provinsi' => 'required',
            'tempat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat harus diisi!'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tempat harus diisi!'
                ]
            ],
            'no_telp' =>
            [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Telepon harus diisi!'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/lokasi_vaksin/create')->withInput()->with('validation', $validation);
        }
        $this->m_lokasi_vaksin->save([
            'id_provinsi' => $this->request->getVar('provinsi'),
            'nama_tempat' => $this->request->getVar('tempat'),
            'alamat_lengkap' => $this->request->getVar('alamat'),
            'no_telp' => $this->request->getVar('no_telp')
        ]);
        session()->setFlashdata('sukses', 'Data Berhasil Disimpan');
        return redirect()->to('/lokasi_vaksin');
    }
}
