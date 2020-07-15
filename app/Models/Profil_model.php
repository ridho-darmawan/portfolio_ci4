<?php

namespace App\Models;

use CodeIgniter\Model;

class Profil_model extends Model
{

    protected $table = 'profil_web';
    protected $allowedFields = ['logo', 'icon', 'name_profil', 'des_job', 'email', 'telpon', 'alamat', 'peta'];

    public function getProfil($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
