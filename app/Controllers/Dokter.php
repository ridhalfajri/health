<?php

namespace App\Controllers;

use App\Models\m_dokter;
use App\Models\m_provinsi;

class Dokter extends BaseController
{
    protected $m_provinsi, $m_dokter;
    public function __construct()
    {
        $this->m_provinsi = new m_provinsi();
        $this->m_dokter = new m_dokter();
    }
    public function index()
    {
        $data = [
            'dokter' => $this->m_dokter->get_all_dokter()
        ];
        return view('pages/dokter/index', $data);
    }
    public function create()
    {
        $provinsi = $this->m_provinsi->get_all_provinsi();
        $data = [
            'provinsi' => $provinsi,
            'validation' => \Config\Services::validation()
        ];
        return view('pages/dokter/create', $data);
    }
    public function edit($id)
    {
        $id_dokter = base64_decode($id);
        //TODO : ambil data dokter lalu edit

        return view('pages/dokter/edit');
    }
    public function store()
    {
        if (!$this->validate([
            'provinsi' => 'required',
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi!'
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
            return redirect()->to('/dokter/create')->withInput()->with('validation', $validation);
        }

        $this->m_dokter->save([
            'id_provinsi' => $this->request->getVar('provinsi'),
            'nama' => $this->request->getVar('nama'),
            'no_telp' => $this->request->getVar('no_telp')
        ]);
        session()->setFlashdata('sukses', 'Data Berhasil Disimpan');
        return redirect()->to('/dokter');
    }
}
