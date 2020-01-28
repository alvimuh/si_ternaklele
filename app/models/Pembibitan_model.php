<?php

class Pembibitan_model
{
    private $table = 'bibit';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAll()
    {
        $this->db->query('SELECT *, datediff(CURDATE(), tgl_penebaran_bibit) as umur_bibit FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getById($id)
    {
        $this->db->query('SELECT *, datediff(CURDATE(), tgl_penebaran_bibit) as umur_bibit  FROM ' . $this->table . ' WHERE kode_bibit=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function insert($data)
    {
        $query = "INSERT INTO bibit VALUES(:kode_bibit,:tgl_penebaran_bibit,:jenis_bibit,:jumlah_bibit,:no_kolam)";
        $this->db->query($query);
        $this->db->bind('kode_bibit', $data['kode_bibit']);
        $this->db->bind('tgl_penebaran_bibit', $data['tgl_penebaran_bibit']);
        $this->db->bind('jenis_bibit', $data['jenis_bibit']);
        $this->db->bind('jumlah_bibit', $data['jumlah_bibit']);
        $this->db->bind('no_kolam', $data['no_kolam']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
