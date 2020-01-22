<?php

class Pembibitan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pembibitan';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('pembibitan/index', $data);
        $this->view('templates/footer');
    }
}
