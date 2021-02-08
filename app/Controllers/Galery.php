<?php

namespace App\Controllers;

class Galery extends BaseController
{
    protected $galerymodel;
    public function __construct()
    {
        $this->galerymodel = new \App\Models\GaleryModel();
    }
    public function index()
    {
        $galery = $this->galerymodel->getGalery();

        $data = [
            'title' => 'Galery | Catur Pamungkas',
            'galery' => $galery,
            'judul' => 'Galery'
        ];

        return view('admin/galery', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Galery',
            'galery' => $this->galerymodel->getGalery($id),
            'halaman' => 'galery'
        ];
        if (empty($data['galery'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Yang Anda Cari Tidak Ada');
        }
        return view('detail/galery', $data);
    }
    public function insert()
    {
        $data = [
            'title' => 'Tambah Data',
            'halaman' => 'Tambah Data'
        ];
        return view('create/galery', $data);
    }
    public function save()
    {
        // simpan gambar
        $filesampul = $this->request->getFile('sampul');
        // mengacak nama sampul bila mana ada nama sampul yang sama
        $namasampul = $filesampul->getRandomName();
        // pindahkan file ge folder img/hoby
        $filesampul->move('img/portfolio', $namasampul);
        // ambil nama file
        $this->galerymodel->save([
            'sampul' => $namasampul,
            'nama' => $this->request->getVAR('nama'),

        ]);

        session()->setFlashdata('save', 'Data Berhasil Ditambahkan');
        return redirect()->to('/galery');
    }
    public function hapus($gambar)
    {
        $this->galerymodel->where(['sampul' => $gambar])->delete();
        unlink('img/portfolio/' . $gambar);
        session()->setFlashdata('hapus', 'Data Berhasil Dihapus');
        return redirect()->to('/galery');
    }
}
