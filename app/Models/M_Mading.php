<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mading extends Model
{
    protected $table = 'tb_mading';
    protected $allowedFields = ['gambar', 'judul', 'isi', 'id_admin'];
    protected $primaryKey = 'id_mading';

    public function countMading()
    {
        $builder = $this->db->table('tb_mading');
        return $builder->countAll();
    }
}
