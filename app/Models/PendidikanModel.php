<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_sekolah', 'slug', 'angkatan', 'alamat', 'lulus', 'sampul'];

    public function getPendidikan($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
