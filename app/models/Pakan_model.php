<?php

class Pakan_model
{
    private $table = 'pakan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kode_pakan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function updateStok($kode_pakan, $qty)
    {
        $this->db->query('UPDATE `pakan` SET `jumlah_pakan`=jumlah_pakan+(:jumlah) WHERE `kode_pakan` LIKE :kode_pakan');
        $this->db->bind('kode_pakan', $kode_pakan);
        $this->db->bind('jumlah', $qty);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function setQty($data)
    {
        $this->db->query('UPDATE `pakan` SET `jumlah_pakan`=:jumlah WHERE `kode_pakan` LIKE :kode_pakan');
        $this->db->bind('kode_pakan', $data['kode_pakan']);
        $this->db->bind('jumlah', $data['jumlah_pakan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function insert($data)
    {
        $query = "INSERT INTO pakan VALUES(:kode_pakan,:jenis_pakan,:nama_pakan,:jumlah_pakan)";
        $this->db->query($query);
        $this->db->bind('kode_pakan', $data['kode_pakan']);
        $this->db->bind('jenis_pakan', $data['jenis_pakan']);
        $this->db->bind('nama_pakan', $data['nama_pakan']);
        $this->db->bind('jumlah_pakan', $data['jumlah_pakan']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function PemberianPakanInsert($data)
    {
        $query = "INSERT INTO pemberian_pakan VALUES('',:kode_bibit,:waktu_pemberian,:tanggal_jam_pemberian,:kode_pakan,:qty_pakan)";
        $this->db->query($query);

        $this->db->bind('kode_bibit', $data['kode_bibit']);
        $this->db->bind('tanggal_jam_pemberian', $data['tanggal_jam_pemberian']);
        $this->db->bind('waktu_pemberian', 'Pagi');
        $this->db->bind('kode_pakan', $data['kode_pakan']);
        $this->db->bind('qty_pakan', $data['qty_pakan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
