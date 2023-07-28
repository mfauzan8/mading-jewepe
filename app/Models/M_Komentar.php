<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Komentar extends Model
{
    protected $table = 'tb_komentar';
    protected $primaryKey = 'id_komentar';
    protected $allowedFields = ['nama', 'email', 'komentar', 'id_mading'];

    public function countKomentar()
    {
        $builder = $this->db->table('tb_komentar');
        return $builder->countAll();
    }
}
