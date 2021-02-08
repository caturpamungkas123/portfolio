<?php

namespace App\Controllers;

class About extends BaseController
{
    protected $pendidikanmodel;
    public function __construct()
    {
        $this->pendidikan = new \App\Models\PendidikanModel();
    }
    public function index()
    {
        $biodatamodel = new \App\Models\BiodataModel();
        $biodata = $biodatamodel->findAll();
        $data = [
            'title' => 'Admin | Catur Pamungkas',
            'pendidikan' => $this->pendidikan->getPendidikan(),
            'judul' => 'About',
            'biodata' => $biodata
        ];

        return view('admin/about', $data);
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Halaman Edit',
            'validation' => \Config\Services::validation(),
            'pendidikan' => $this->pendidikanmodel->getPendidikan($slug)
        ];

        return view('edit/pendidikan', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Detail Pendidikan',
            'pendidikan' => $this->pendidikanmodel->getPendidikan($slug),
            'halaman' => 'Pendidikan'
        ];
        if (empty($data['pendidikan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Yang Anda Cari Tidak Ada');
        }
        return view('detail/about', $data);
    }
    public function insert()
    {
        $data = [
            'title' => 'Tambah Data',
            'halaman' => 'Tambah Data'
        ];
        return view('create/about', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->aboutmodel->save([
            'sampul' => $this->request->getVar('sampul'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug

        ]);
        return redirect()->to('/about');
    }
    public function update($id)
    {
        $filesampul = $this->request->getFile('sampul');
        $sampulLama = $this->request->getVar('sampulLama');
        if ($filesampul->getError() == 4) {
            $namasampul = $this->request->getVar('sampulLama');
        } else {
            $namasampul = $filesampul->getName();
            unlink('img/pendidikan/' . $sampulLama);
            $this->request->getFile('sampul')->move('img/pendidikan');
        }

        $slug = url_title($this->request->getVar('nama_sekolah'), '-', true);
        $this->pendidikanmodel->save([
            'id' => $id,
            'nama_sekolah' => $this->request->getVAR('nama_sekolah'),
            'slug' => $slug,
            'angkatan' => $this->request->getVAR('angkatan'),
            'alamat' => $this->request->getVAR('alamat'),
            'lulus' => $this->request->getVAR('lulus'),
            'sampul' => $namasampul
        ]);

        session()->setflashdata('biodata', 'Data Behasil Diubah');
        return redirect()->to('/about');
    }
}
