<?php

class Admin_Panen extends Controller
{
    public function index()
    {
        $data['judul'] = 'Admin Panen';
        $data['panen'] = $this->model('Pembibitan_model')->getPanen();
        $this->view('templates/header_admin', $data);
        $this->view('panen/admin', $data);
        $this->view('templates/footer');
    }
}
