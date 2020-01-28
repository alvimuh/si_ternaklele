<?php

class Pembibitan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Pembibitan';
        $data['bibit'] = $this->model('Pembibitan_model')->getAll();

        // var_dump($perbedaan);
        $this->view('templates/header', $data);
        $this->view('pembibitan/index', $data);
        $this->view('templates/footer');
    }
    public function insert()
    {

        function kodebibit_terpakai($data)
        {
            foreach ($data as $bibit) {
                if ($bibit['kode_bibit'] == $_POST['kode_bibit'])
                    return true;
                else
                    return false;;
            }
        }
        if (!kodebibit_terpakai($this->model('Pembibitan_model')->getAll())) {

            if ($this->model('Pembibitan_model')->insert($_POST) > 0) {
                Flasher::setFlash('Berhasil!', 'Data bibit telah ditambahkan', 'success');
                header('Location:' . BASEURL . '/pembibitan');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal menginput data!', 'Kode bibit sudah terdaftar', 'danger');
            header('Location:' . BASEURL . '/pembibitan');
        }
    }
}
