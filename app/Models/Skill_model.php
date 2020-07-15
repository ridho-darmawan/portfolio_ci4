<?php

namespace App\Models;

use CodeIgniter\Model;

class Skill_model extends Model
{

    protected $table = 'skill';
    protected $allowedFields = ['nama', 'class', 'gambar'];

    public function getSkill($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
