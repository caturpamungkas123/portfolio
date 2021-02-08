<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    protected $table = 'admin';
    protected $allowedFields = ['username', 'password'];
    protected $useTimestamps = true;

    public function getUser($user = false)
    {
        if ($user == false) {
            return $this->findAll();
        }
        return $this->where(['username' => $user])->first();
    }
    public function login($username, $password)
    {
        return $this->where([
            'username' => $username,
            'password' => $password
        ])->get()->getRowArray();
    }
}
