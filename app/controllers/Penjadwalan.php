<?php

class Penjadwalan extends Controller
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
        $data['judul'] = 'Penjadwalan';
        $data['jadwal'] = $this->model('Penjadwalan_model')->getJadwal();
        // $data['bibit'] = $this->model('Pembibitan_model')->getAll();
        // $data['pemberian_pakan'] = $this->model('Penjadwalan_model')->getPemberianPakan();
        // $data['pemberian_nutrisi'] = $this->model('Penjadwalan_model')->getPemberianNutrisi();

        // //Mengecek status pemberian pakan (sudah/belum)
        // for ($x = 0; $x < count($data['bibit']); $x++) {
        //     $data['bibit'][$x]['pagi'] = false;
        //     $data['bibit'][$x]['siang'] = false;
        //     $data['bibit'][$x]['sore'] = false;

        //     foreach ($data['pemberian_pakan'] as $pemberian_pakan) {
        //         $cekKodeBibit = $data['bibit'][$x]['kode_bibit'] == $pemberian_pakan['kode_bibit'];
        //         $cekToday = date('d M Y') == date('d M Y', strtotime($pemberian_pakan['tanggal_jam_pemberian']));
        //         if ($cekKodeBibit && $cekToday) {
        //             switch (strtolower($pemberian_pakan['waktu_pemberian'])) {
        //                 case 'pagi':
        //                     $data['bibit'][$x]['pagi'] = true;
        //                     break;
        //                 case 'siang':
        //                     $data['bibit'][$x]['siang'] = true;
        //                     break;
        //                 case 'sore':
        //                     $data['bibit'][$x]['sore'] = true;
        //                     break;
        //             }
        //         }
        //     }
        // };


        $this->view('templates/header', $data);
        $this->view('penjadwalan/index', $data);
        $this->view('templates/footer');
    }

    public function pemberian_pakan($id_jadwal)
    {
        $data['judul'] = 'Pemberian Pakan';
        $data['jadwal'] = $this->model('Penjadwalan_model')->getJadwalById($id_jadwal);
        $data['bibit'] = $this->model('Pembibitan_model')->getAll();
        $data['pakan'] = $this->model('Pakan_model')->getAll();
        $this->view('templates/header', $data);
        $this->view('penjadwalan/pemberian_pakan', $data);
        $this->view('templates/footer');
    }
    public function pemberian_pakan_insert()
    {
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['waktu_pemberian'];
        $tanggal_jam_pemberian = date('Y-m-d H:i:s', strtotime("$tanggal $jam"));
        foreach ($_POST['kode_bibit'] as $bibit) {
            $data = array(
                "kode_bibit" => $bibit,
                "tanggal_jam_pemberian" => $tanggal_jam_pemberian,
                "kode_pakan" => $_POST['kode_pakan'][$bibit],
                "qty_pakan" => $_POST['qty_pakan'][$bibit]
            );
            $this->model('Pakan_model')->PemberianPakanInsert($data);
            $this->model('Pakan_model')->updateStok($data['kode_pakan'], -floatval($data['qty_pakan']));
        }
        $this->model('Penjadwalan_model')->updateStatus($_POST['id_jadwal']);
        Flasher::setFlash('Berhasil!', 'Data pemberian pakan telah ditambahkan', 'success');
        header('Location:' . BASEURL . '/penjadwalan');
    }

    public function pemberian_nutrisi($id_jadwal)
    {
        $data['judul'] = 'Pemberian Nutrisi';
        $data['jadwal'] = $this->model('Penjadwalan_model')->getJadwalById($id_jadwal);
        $data['bibit'] = $this->model('Pembibitan_model')->getAll();
        $data['nutrisi'] = $this->model('Nutrisi_model')->getAll();
        $this->view('templates/header', $data);
        $this->view('penjadwalan/pemberian_nutrisi', $data);
        $this->view('templates/footer');
    }
    public function pemberian_nutrisi_insert()
    {
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['waktu_pemberian'];
        $tanggal_jam_pemberian = date('Y-m-d H:i:s', strtotime("$tanggal $jam"));

        foreach ($_POST['kode_bibit'] as $bibit) {
            $data = array(
                "kode_bibit" => $bibit,
                "tanggal_jam_pemberian" => $tanggal_jam_pemberian,
                "kode_nutrisi" => $_POST['kode_nutrisi'][$bibit],
                "qty_nutrisi" => $_POST['qty_nutrisi'][$bibit]
            );
            $this->model('Nutrisi_model')->PemberianNutrisiInsert($data);
            $this->model('Nutrisi_model')->updateStok($data['kode_nutrisi'], -floatval($data['qty_nutrisi']));
        }
        $this->model('Penjadwalan_model')->updateStatus($_POST['id_jadwal']);
        Flasher::setFlash('Berhasil!', 'Data pemberian nutrisi telah ditambahkan', 'success');
        header('Location:' . BASEURL . '/penjadwalan');
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

    public function pembersihan_kolam($kode_jadwal)
    {
        if ($this->model('Penjadwalan_model')->updateStatus($kode_jadwal) > 0) {
            Flasher::setFlash('Berhasil!', 'Pembersihan kolam telah dilakukan', 'success');
            header('Location:' . BASEURL . '/penjadwalan');
            exit;
        } else {
            Flasher::setFlash('Gagal menginput data!', '', 'danger');
            header('Location:' . BASEURL . '/penjadwalan');
        }
    }
}
