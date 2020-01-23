<?php

class Penjadwalan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Penjadwalan';
        $data['jadwal'] = array();
        $this->view('templates/header', $data);
        $this->view('penjadwalan/index', $data);
        $this->view('templates/footer');
    }
    public function tambah_pemberian_pakan($date, $waktu, $kode_bibit)
    {
        $data['judul'] = 'Penjadwalan';
        $data['jadwal'] = array();
        $data['bibit'] = $data['mhs'] = $this->model('Pembibitan_model')->getById($kode_bibit);
        $data['pakan'] = $this->model('Pakan_model')->getAll();
        $data['waktu_pemberian'] = $waktu;
        $data['tanggal_pemberian'] = $date;
        $this->view('templates/header', $data);
        $this->view('penjadwalan/insert_data', $data);
        $this->view('templates/footer');
    }
    public function insert_pemberian_pakan($date, $waktu, $kode_bibit)
    {
        $jam_pakan = $_POST['jam_pakan'];
        $data = array(
            "kode_bibit" => $kode_bibit,
            "waktu_pemberian" => $waktu,
            "tanggal_jam_pemberian" => date('Y-m-d H:i:s', strtotime("$date $jam_pakan"))
        );
        $fulldata = array_merge($data, $_POST);
        if ($this->model('Penjadwalan_model')->insert_pemberian_pakan($fulldata) > 0) {
            Flasher::setFlash('Berhasil!', 'Data pemberian pakan telah ditambahkan', 'success');
            header('Location:' . BASEURL . '/penjadwalan');
            exit;
        } else {
            Flasher::setFlash('Gagal menginput data!', '', 'danger');
            header('Location:' . BASEURL . '/penjadwalan');
        }
    }
}
