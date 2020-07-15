<?php

namespace App\Models;

use CodeIgniter\Model;

class Portfolio_model extends Model
{

    protected $table = 'portfolio';
    protected $allowedFields = ['jenis', 'title', 'deskripsi', 'fitur', 'gambar'];

    public function getPortfolio($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
