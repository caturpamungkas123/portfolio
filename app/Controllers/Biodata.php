<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Biodata extends Controller
{
    protected $biodatamodel;
    public function __construct()
    {
        $this->biodatamodel = new \App\Models\BiodataModel();
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Halaman Edit',
            'biodata' => $this->biodatamodel->getBiodata($slug)
        ];
        return view('edit/biodata', $data);
    }

    public function update($id)
    {
        // simpan gambar
        $filesampul = $this->request->getFile('sampul');
        // mengacak nama sampul bila mana ada nama sampul yang sama
        if ($filesampul->getError() == 4) {
            $namasampul = $this->request->getVar('sampullama');
        } else {
            $namasampul = $filesampul->getRandomName();
            // pindahkan file ge folder img/hoby
            $filesampul->move('img/biodata', $namasampul);
            // jika file baru hpus file lama
            unlink('img/biodata' . $this->request->getVar('sampullama'));
        }
        $slug = url_title($this->request->getVar('nama'), '-', true);

        $this->biodatamodel->save([

            'id' => $id,
            'nama' => $this->request->getVAR('nama'),
            'slug' => $slug,
            'ttl' => $this->request->getVAR('ttl'),
            'alamat' => $this->request->getVAR('alamat'),
            'suporter' => $this->request->getVAR('suporter'),
            'sampul' => $namasampul
        ]);
        session()->setFlashdata('biodata', 'Data Berhasil Diubah');
        return redirect()->to('/about');
    }
}
