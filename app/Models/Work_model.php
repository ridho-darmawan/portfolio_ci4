<?php

namespace App\Models;

use CodeIgniter\Model;

class Work_model extends Model
{

    protected $table = 'work';
    protected $allowedFields = ['work_name'];

    public function getWork($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
