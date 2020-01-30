<?php

class Admin_Stok extends Controller
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
        $data['judul'] = 'Stok';
        $data['pakan'] = $this->model('Pakan_model')->getAll();
        $data['nutrisi'] = $this->model('Nutrisi_model')->getAll();
        $this->view('templates/header_admin', $data);
        $this->view('stok/admin', $data);
        $this->view('templates/footer');
    }
    public function insert_pakan()
    {
        function kodepakan_terpakai($data)
        {
            foreach ($data as $pakan) {
                if ($pakan['kode_pakan'] == $_POST['kode_pakan'])
                    return true;
                else
                    return false;;
            }
        }
        if (!kodepakan_terpakai($this->model('Pakan_model')->getAll())) {
            if ($this->model('Pakan_model')->insert($_POST) > 0) {
                Flasher::setFlash('Berhasil!', 'Data pakan telah ditambahkan', 'success');
                header('Location:' . BASEURL . '/admin_stok');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal menginput data!', 'Kode pakan sudah terdaftar', 'danger');
            header('Location:' . BASEURL . '/admin_stok');
        }
    }
    public function update_pakan($kode_pakan)
    {
        $data['kode_pakan'] = $kode_pakan;
        $data['pakan'] = $this->model('Pakan_model')->getById($kode_pakan);
        $this->view('templates/header_admin', $data);
        $this->view('stok/update_pakan', $data);
        $this->view('templates/footer');
    }
    public function update_pakan_insert()
    {
        var_dump($_POST);
        if ($this->model('Pakan_model')->setQty($_POST) > 0) {
            Flasher::setFlash('Berhasil!', 'Stok pakan telah diperbarui', 'success');
            header('Location:' . BASEURL . '/admin_stok');
            exit;
        } else {
            Flasher::setFlash('Gagal mengupdate data!', '', 'danger');
            header('Location:' . BASEURL . '/admin_stok');
        }
    }


    public function insert_nutrisi()
    {
        function kodenutrisi_terpakai($data)
        {
            foreach ($data as $nutrisi) {
                if ($nutrisi['kode_nutrisi'] == $_POST['kode_nutrisi'])
                    return true;
                else
                    return false;;
            }
        }
        if (!kodenutrisi_terpakai($this->model('Nutrisi_model')->getAll())) {
            if ($this->model('Nutrisi_model')->insert($_POST) > 0) {
                Flasher::setFlash('Berhasil!', 'Data nutrisi telah ditambahkan', 'success');
                header('Location:' . BASEURL . '/admin_stok');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal menginput data!', 'Kode pakan sudah terdaftar', 'danger');
            header('Location:' . BASEURL . '/admin_stok');
        }
    }


    public function update_nutrisi($kode_nutrisi)
    {
        $data['kode_nutrisi'] = $kode_nutrisi;
        $data['nutrisi'] = $this->model('Nutrisi_model')->getById($kode_nutrisi);
        $this->view('templates/header_admin', $data);
        $this->view('stok/update_nutrisi', $data);
        $this->view('templates/footer');
    }
    public function update_nutrisi_insert()
    {
        if ($this->model('Nutrisi_model')->setQty($_POST) > 0) {
            Flasher::setFlash('Berhasil!', 'Stok nutrisi telah diperbarui', 'success');
            header('Location:' . BASEURL . '/admin_stok');
            exit;
        } else {
            Flasher::setFlash('Gagal mengupdate data!', '', 'danger');
            header('Location:' . BASEURL . '/admin_stok');
        }
    }
}
