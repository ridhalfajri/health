<?php

namespace App\Models;

use CodeIgniter\Model;

class m_jenis_vaksin extends Model
{
    protected $table="jenis_vaksin";
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_jenis_vaksin','nama'];

    public function get_jenis_vaksin(){
        $builder = $this->db->table('jenis_vaksin');
        $builder->select('*');
        $query = $builder->get()->getResultObject();

        return $query;
    }
}

?>