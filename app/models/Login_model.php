<?php

class Login_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function auth($data)
    {
        $this->db->query('SELECT * FROM users WHERE username=:username AND password=:password');
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        return $this->db->resultSet();
    }
    public function getUser($username)
    {
        $this->db->query('SELECT * FROM users WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }
}
