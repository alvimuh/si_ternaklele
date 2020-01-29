<?php

class Admin_Panen extends Controller
{
    public function index()
    {
        $data['judul'] = 'Admin Panen';
        $data['jadwal'] = $this->model('Penjadwalan_model')->getJadwal();
        $this->view('templates/header', $data);
        $this->view('panen/admin', $data);
        $this->view('templates/footer');
    }
}
