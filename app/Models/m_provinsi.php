<?php

namespace App\Models;

use CodeIgniter\Model;

class m_provinsi extends Model
{
    protected $table = 'provinsi';
    public function get_all_provinsi()
    {
        return $this->db->table('provinsi')->get()->getResultObject();
    }
}
