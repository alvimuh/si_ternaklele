<?php

class Panen extends Controller
{
    function __construct()
    {
        if (strtolower($_SESSION['login']['role']) != 'user') {
            Flasher::setFlash('Kesalahan login.', 'Anda tidak memiliki hak akses', 'danger');
            header('Location:' . BASEURL . '/login');
            unset($_SESSION['login']);
        }
    }
    public function index()
    {
        $data['judul'] = 'Panen';
        $data['bibit'] = $this->model('Pembibitan_model')->getAll();
        $this->view('templates/header', $data);
        $this->view('panen/index', $data);
        $this->view('templates/footer');
    }
    public function new($kode_bibit)
    {
        $data['judul'] = 'Input Data Panen';
        $data['bibit'] = $this->model('Pembibitan_model')->getById($kode_bibit);
        $this->view('templates/header', $data);
        $this->view('panen/new', $data);
        $this->view('templates/footer');
    }
    public function new_insert()
    {
        if ($this->model('Pembibitan_model')->panen($_POST) > 0 && $this->model('Pembibitan_model')->update_status_panen($_POST['kode_bibit']) > 0) {
            Flasher::setFlash('Berhasil!', 'Data panen telah ditambahkan', 'success');
            header('Location:' . BASEURL . '/panen');
            exit;
        } else {
            Flasher::setFlash('Gagal menginput data!', '', 'danger');
            header('Location:' . BASEURL . '/panen');
        }
    }
}
