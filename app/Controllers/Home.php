<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Catur Pamungkas'
        ];

        return view('pages/home', $data);
    }
    public function about()
    {
        $biodata = $this->biodatamodel->getBiodata();
        $pendidikan = $this->pendidikanmodel->getPendidikan();
        $data = [
            'title' => 'About | Catur Pamungkas',
            'biodata' => $biodata,
            'pendidikan' => $pendidikan
        ];

        return view('pages/about', $data);
    }

    public function galery()
    {
        $galery = $this->galerymodel->findAll();
        $data = [
            'title' => 'Galery | Catur Pamungkas',
            'galery' => $galery
        ];
        return view('pages/galery', $data);
    }

    public function hoby()
    {
        $data = [
            'title' => 'Hoby | Catur Pamungkas'
        ];
        return view('pages/hoby', $data);
    }
}
