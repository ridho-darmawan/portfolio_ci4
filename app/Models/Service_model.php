<?php

namespace App\Models;

use CodeIgniter\Model;

class Service_model extends Model
{

    protected $table = 'service';
    protected $allowedFields = ['title', 'text', 'gambar'];

    public function getService($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
