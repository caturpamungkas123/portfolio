<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleryModel extends Model
{
    protected $table = 'galery';
    protected $useTimestamps = true;
    protected $allowedFields = ['sampul', 'nama'];

    public function getGalery($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
