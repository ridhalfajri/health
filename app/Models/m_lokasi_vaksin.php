<?php

namespace App\Models;

use CodeIgniter\Model;

class m_lokasi_vaksin extends Model
{
    protected $table="lokasi_vaksin";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_provinsi','alamat_lengkap','no_telp','status','nama_tempat'];

    public function get_lokasi_vaksin(){
        $builder = $this->db->table('lokasi_vaksin');
        $builder->select('*');
        $builder->join('provinsi', 'provinsi.id = lokasi_vaksin.id_provinsi');
        $query = $builder->get()->getResultObject();

        return $query;
    }
}

?>