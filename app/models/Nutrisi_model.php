<?php

class Nutrisi_model
{
    private $table = 'nutrisi';
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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kode_nutrisi=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function updateStok($kode_nutrisi, $qty)
    {
        $this->db->query('UPDATE `nutrisi` SET `jumlah_nutrisi`=jumlah_nutrisi+(:jumlah) WHERE `kode_nutrisi` LIKE :kode_nutrisi');
        $this->db->bind('kode_nutrisi', $kode_nutrisi);
        $this->db->bind('jumlah', $qty);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function setQty($data)
    {
        $this->db->query('UPDATE `nutrisi` SET `jumlah_nutrisi`=:jumlah WHERE `kode_nutrisi` LIKE :kode_nutrisi');
        $this->db->bind('kode_nutrisi', $data['kode_nutrisi']);
        $this->db->bind('jumlah', $data['jumlah_nutrisi']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function insert($data)
    {
        $query = "INSERT INTO nutrisi VALUES(:kode_nutrisi,:jenis_nutrisi,:nama_nutrisi,:jumlah_nutrisi)";
        $this->db->query($query);
        $this->db->bind('kode_nutrisi', $data['kode_nutrisi']);
        $this->db->bind('jenis_nutrisi', $data['jenis_nutrisi']);
        $this->db->bind('nama_nutrisi', $data['nama_nutrisi']);
        $this->db->bind('jumlah_nutrisi', $data['jumlah_nutrisi']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function PemberianNutrisiInsert($data)
    {
        $query = "INSERT INTO pemberian_nutrisi VALUES('',:kode_bibit,:tanggal_jam_pemberian,:kode_nutrisi,:qty_nutrisi)";
        $this->db->query($query);

        $this->db->bind('kode_bibit', $data['kode_bibit']);
        $this->db->bind('tanggal_jam_pemberian', $data['tanggal_jam_pemberian']);
        $this->db->bind('kode_nutrisi', $data['kode_nutrisi']);
        $this->db->bind('qty_nutrisi', $data['qty_nutrisi']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
