<?php

namespace App\Controllers;

class Contact extends BaseController
{
    protected $portfoliomodel;
    public function __construct()
    {
        $this->portfoliomodel = new \App\Models\PortfolioModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Contact Us | Catur Pamungkas',
            'validat' => \Config\Services::validation()
        ];

        return view('pages/contact', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus Disi..'
                ]
            ],

            'telepon' => [
                'rules' =>  'required',
                'errors' => [
                    'required' => 'Nomer Telepon Juga Disi Gisit Boss'
                ]
            ],
            'email' => [
                'rules' => 'valid_email|required',
                'errors' => [
                    'valid_email' => 'Email Tidak Valid',
                    'required' => 'Email Harap Disi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/contact')->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('nama'), '-',   'true');

        $this->portfoliomodel->save([

            'nama' => $this->request->getVAR('nama'),
            'slug' => $slug,
            'email' => $this->request->getVAR('email'),
            'telepon' => $this->request->getVAR('telepon'),
            'pesan' => $this->request->getVAR('pesan')
        ]);
        session()->setFlashdata('success', 'Pesan Berhasil Dikirim .!');
        return redirect()->to('/contact');
    }
}
