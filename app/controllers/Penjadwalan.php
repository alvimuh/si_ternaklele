<?php

class Penjadwalan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Penjadwalan';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('penjadwalan/index', $data);
        $this->view('templates/footer');
    }
}