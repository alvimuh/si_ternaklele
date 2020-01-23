<?php

class Pembibitan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pembibitan';
        $data['bibit'] = $this->model('Pembibitan_model')->getAll();
        $this->view('templates/header', $data);
        $this->view('pembibitan/index', $data);
        $this->view('templates/footer');
    }
    public function insert()
    {
        if ($this->model('Pembibitan_model')->insert($_POST) > 0) {
            header('Location:' . BASEURL . '/pembibitan');
            exit;
        }
    }
}
