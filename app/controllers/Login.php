<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('login', $data);
    }
    public function auth()
    {
        if ($this->model('Login_model')->auth($_POST)) {
            $userData = $this->model('Login_model')->getUser($_POST['username']);
            $_SESSION['login'] = [
                'username' => $userData['username'],
                'role' => $userData['role']
            ];
            if ($userData['role'] == 'admin') {
                header('Location:' . BASEURL . '/admin_pembibitan');
            } else {
                header('Location:' . BASEURL . '/pembibitan');
            }
        } else {
            Flasher::setFlash('Kesalahan login.', 'Username dan password salah', 'danger');
            header('Location:' . BASEURL . '/login');
        }
    }
    public function out()
    {
        if ($_SESSION['login'] > 0) {
            unset($_SESSION['login']);
            Flasher::setFlash('', 'Berhasil keluar', 'success');
            header('Location:' . BASEURL . '/login');
        }
    }
}
