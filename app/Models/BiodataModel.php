<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $allowedFields = ['nama', 'slug', 'ttl', 'alamat', 'sampul'];
    protected $useTimestamps = true;

    public function getBiodata($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
