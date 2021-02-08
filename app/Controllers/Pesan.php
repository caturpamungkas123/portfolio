<?php

namespace App\Controllers;

class Pesan extends BaseController
{
    public function index()
    {
        $this->pesan = new \App\Models\PesanModel();
        $data = [
            'title' => 'Admin | Pesan',
            'pesan' => $this->pesan->getPesan()
        ];
        return view('admin/pesan', $data);
    }
    public function hapus($data)
    {
        $this->pesan = new \App\Models\PesanModel();
        $this->pesan->where(['slug' => $data])->delete();
        session()->setFlashdata('success', 'Data Berhasil Dihapus');
        return redirect()->to('/pesan');
    }
}
