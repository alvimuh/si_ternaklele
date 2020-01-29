<?php

class Admin_Pembibitan extends Controller
{
    function __construct()
    {
        if (strtolower($_SESSION['login']['role']) != 'admin') {
            Flasher::setFlash('Kesalahan login.', 'Anda tidak memiliki hak akses', 'danger');
            header('Location:' . BASEURL . '/login');
            unset($_SESSION['login']);
        }
    }
    public function index()
    {
        $data['judul'] = 'Pembibitan';
        $data['bibit'] = $this->model('Pembibitan_model')->getAll();

        $data['judul'] = 'Pembibitan';
        $this->view('templates/header_admin', $data);
        $this->view('pembibitan/admin', $data);
        $this->view('templates/footer');
    }
    // public function insert()
    // {
    //     function kodebibit_terpakai($data)
    //     {
    //         foreach ($data as $bibit) {
    //             if ($bibit['kode_bibit'] == $_POST['kode_bibit'])
    //                 return true;
    //             else
    //                 return false;;
    //         }
    //     }
    //     if (!kodebibit_terpakai($this->model('Pembibitan_model')->getAll())) {

    //         if ($this->model('Pembibitan_model')->insert($_POST) > 0) {
    //             Flasher::setFlash('Berhasil!', 'Data bibit telah ditambahkan', 'success');
    //             header('Location:' . BASEURL . '/pembibitan');
    //             exit;
    //         }
    //     } else {
    //         Flasher::setFlash('Gagal menginput data!', 'Kode bibit sudah terdaftar', 'danger');
    //         header('Location:' . BASEURL . '/pembibitan');
    //     }
    // }
}
