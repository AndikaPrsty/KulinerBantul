<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function index()
    {
        $valid =  $this->form_validation;
        $valid->set_rules('email', 'Alamat email', 'required|trim', ['required' => 'Alamat email harus diisi']);
        $valid->set_rules('password', 'Password', 'required|trim', ['required' => 'Password harus diisi']);

        if ($valid->run() == false) {
            $this->load->view('user/login');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $user = $this->UserModel->getUser(['email' => $this->input->post('email', true)])->row_array();
        if ($user != "") {
            if (password_verify($this->input->post('password'), $user['password'])) {
                $session = [
                    'nama' => $user['nama_user'],
                    'email' => $user['email'],
                    'image' => $user['image'],
                    'id_role' => $user['id_role'],
                    'ip_address' => $user['ip_address']
                ];
                $this->session->set_userdata($session);
                redirect();
            } else {
                echo 'password salah';
            }
        } else {
            echo 'user tidak ditemukan';
        }
    }
    public function logout()
    {
        $session = [
            'nama',
            'email',
            'image',
            'id_role',
            'ip_address'
        ];
        $this->session->unset_userdata($session);
        redirect();
    }
}
