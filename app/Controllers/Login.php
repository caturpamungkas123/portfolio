<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login/index');
    }
    // public function register()
    // {
    //     $data = [
    //         'title' => 'Form Tambah User',
    //         'validation' => \Config\Services::validation()
    //     ];
    //     return view('auth/register', $data);
    // }

    public function log_out()
    {
        session()->destroy();
        return redirect()->to('/auth/index');
    }

    public function save_register()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[admin.username]',
                'errors' => [
                    'required' => 'Ussername Harus Disi',
                    'is_unique' => 'Ussernam Sudah Ada'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Harus Disi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/auth/register')->withInput()->with('validation', $validation);
        }
        $this->admin = new \App\Models\UserModel();
        $this->admin->insert([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password')
        ]);
        return redirect()->to('/about/index');
    }
    public function cek_login()
    {
        $this->admin = new \App\Models\UserModel();
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Ussername Harus Disi',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password Harus Disi'
                ]
            ],
        ])) {
            return redirect()->to('/auth/index')->withInput();
        }
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $cek = $this->admin->login($username, $password);
        if ($cek) {
            session()->set('log', true);
            session()->set('username', $cek['username']);
            session()->set('password', $cek['password']);

            return redirect()->to('/about/index');
        } else {
            session()->setFlashdata('gagal', 'Username / Password Salah');
            return redirect()->to('/auth/index');
        }
    }
}
