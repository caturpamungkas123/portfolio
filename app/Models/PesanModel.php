<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table      = 'portfolio';

    public function getPesan($pesan = false)
    {
        if ($pesan == false) {
            return $this->findAll();
        }
    }
}
