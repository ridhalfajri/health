<?php

namespace App\Models;

use CodeIgniter\Model;

class m_dokter extends Model
{
    protected $table = 'dokter';
    protected $allowedFields = [
        'id_provinsi',
        'nama',
        'no_telp'
    ];
    public function get_all_dokter()
    {
        $builder = $this->db->table('dokter');
        $builder->select('*');
        $builder->join('provinsi', 'provinsi.id = dokter.id_provinsi');
        $query = $builder->get()->getResultObject();
        return $query;
    }
}
