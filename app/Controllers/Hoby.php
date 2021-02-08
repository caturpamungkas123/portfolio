<?php

namespace App\Controllers;

class Hoby extends BaseController
{
    protected $hobymodel;
    public function __construct()
    {
        $this->hobymodel = new \App\Models\HobyModel();
    }
    public function index()
    {
        $hoby = $this->hobymodel->getHoby();

        $data = [
            'title' => 'Hoby | Catur Pamungkas',
            'hoby' => $hoby,
            'judul' => 'Hoby'
        ];

        return view('admin/hoby', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detai Hoby',
            'hoby' => $this->hobymodel->getHoby($slug),
            'halaman' => 'hoby'
        ];
        if (empty($data['hoby'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Yang Anda Cari Tidak Ada');
        }
        return view('detail/hoby', $data);
    }
    public function insert()
    {
        $data = [
            'title' => 'Tambah Data',
            'halaman' => 'Tambah Data'
        ];
        return view('create/hoby', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->hobymodel->save([
            'sampul' => $this->request->getVar('sampul'),
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug

        ]);
        return redirect()->to('/hoby');
    }
}
