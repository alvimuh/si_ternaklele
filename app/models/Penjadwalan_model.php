<?php

class Penjadwalan_model
{
    private $table = 'jadwal';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getJadwal()
    {
        $this->db->query('SELECT * FROM jadwal ORDER BY tanggal_jadwal DESC');
        return $this->db->resultSet();
    }
    public function getJadwalById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_jadwal=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function updateStatus($id)
    {
        $this->db->query('UPDATE `jadwal` SET `status`=1 WHERE id_jadwal LIKE :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function BuatJadwal($tanggal_jadwal, $tipe_jadwal)
    {
        $this->db->query('INSERT INTO `jadwal`(`id_jadwal`, `tanggal_jadwal`, `tipe_jadwal`, `status`) VALUES ("",:tanggal_jadwal,:tipe_jadwal,"2")');
        $this->db->bind('tanggal_jadwal', $tanggal_jadwal);
        $this->db->bind('tipe_jadwal', $tipe_jadwal);
        $this->db->execute();
        return $this->db->rowCount();
    }
    // public function getPemberianPakan()
    // {
    //     $this->db->query('SELECT * FROM pemberian_pakan');
    //     return $this->db->resultSet();
    // }
    // public function getPemberianNutrisi()
    // {
    //     $this->db->query('SELECT * FROM pemberian_nutrisi');
    //     return $this->db->resultSet();
    // }
    // public function insert_pemberian_pakan($data)
    // {
    //     $query = "INSERT INTO pemberian_pakan VALUES('',:kode_bibit,:waktu_pemberian,:tanggal_jam_pemberian,:kode_pakan,:qty_pakan)";
    //     $this->db->query($query);
    //     var_dump($data);
    //     $this->db->bind('kode_bibit', $data['kode_bibit']);
    //     $this->db->bind('waktu_pemberian', $data['waktu_pemberian']);
    //     $this->db->bind('tanggal_jam_pemberian', $data['tanggal_jam_pemberian']);
    //     $this->db->bind('kode_pakan', $data['pakan']);
    //     $this->db->bind('qty_pakan', $data['qty_pakan']);
    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }
}
