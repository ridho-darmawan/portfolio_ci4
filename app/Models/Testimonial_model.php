<?php

namespace App\Models;

use CodeIgniter\Model;

class Testimonial_model extends Model
{

    protected $table = 'testimonial';
    protected $allowedFields = ['name', 'komentar', 'gambar'];

    public function getTestimonial($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
