<?php

class Admin_Penjadwalan extends Controller
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
        $data['judul'] = 'Penjadwalan Admin';
        $data['jadwal'] = $this->model('Penjadwalan_model')->getJadwal();
        $this->view('templates/header_admin', $data);
        $this->view('penjadwalan/admin', $data);
        $this->view('templates/footer');
    }
    public function set_jadwal()
    {
        if ($_POST['jenis_jadwal'] == '1') {
            $begin = new DateTime($_POST['tgl_mulai']);
            $end = new DateTime($_POST['tgl_selesai']);

            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);

            foreach ($period as $dt) {
                $this->model('Penjadwalan_model')->BuatJadwal($dt->format("Y-m-d"), $_POST['jenis_jadwal']);
            }
        } else if ($_POST['jenis_jadwal'] == '2') {
            $begin = new DateTime($_POST['tgl_mulai']);
            $end = new DateTime($_POST['tgl_selesai']);

            $interval = DateInterval::createFromDateString('3 day');
            $period = new DatePeriod($begin, $interval, $end);

            foreach ($period as $dt) {
                $this->model('Penjadwalan_model')->BuatJadwal($dt->format("Y-m-d"), $_POST['jenis_jadwal']);
            }
        } else if ($_POST['jenis_jadwal'] == '3') {
            $begin = new DateTime($_POST['tgl_mulai']);
            $end = new DateTime($_POST['tgl_selesai']);

            $interval = DateInterval::createFromDateString('1 week');
            $period = new DatePeriod($begin, $interval, $end);

            foreach ($period as $dt) {
                $this->model('Penjadwalan_model')->BuatJadwal($dt->format("Y-m-d"), $_POST['jenis_jadwal']);
            }
        }
        Flasher::setFlash('Berhasil!', 'Jadwal telah ditambahkan', 'success');
        header('Location:' . BASEURL . '/admin_penjadwalan/');
        exit;
    }
}
