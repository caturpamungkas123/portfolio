<?php

namespace App\Models;

use CodeIgniter\Model;

class HobyModel extends Model
{
    protected $table = 'hoby';
    protected $allowedFields = ['nama', 'slug', 'sampul',];
    protected $useTimestamps = true;

    public function getHoby($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
