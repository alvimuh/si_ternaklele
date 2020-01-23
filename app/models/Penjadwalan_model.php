<?php

class Penjadwalan_model
{
    private $table = 'jadwal';
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
    public function insert_pemberian_pakan($data)
    {
        $query = "INSERT INTO pemberian_pakan VALUES('',:kode_bibit,:waktu_pemberian,:tanggal_jam_pemberian,:kode_pakan,:qty_pakan)";
        $this->db->query($query);
        var_dump($data);
        $this->db->bind('kode_bibit', $data['kode_bibit']);
        $this->db->bind('waktu_pemberian', $data['waktu_pemberian']);
        $this->db->bind('tanggal_jam_pemberian', $data['tanggal_jam_pemberian']);
        $this->db->bind('kode_pakan', $data['pakan']);
        $this->db->bind('qty_pakan', $data['qty_pakan']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
