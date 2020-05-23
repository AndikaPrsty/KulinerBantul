<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata())

    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect();
        }
        $valid =  $this->form_validation;
        $valid->set_rules('email', 'Alamat email', 'required|trim', ['required' => 'Alamat email harus diisi']);
        $valid->set_rules('password', 'Password', 'required|trim', ['required' => 'Password harus diisi']);

        if ($valid->run() == false) {
            $this->load->view('user/login');
        } else {
            $this->_login();
        }
    }
    public function daftar()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', [
            'required' => 'Nama tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]|trim', [
            'required' => 'Alamat Email tidak boleh kosong',
            'valid_email' => 'Format Email yang anda inputkan salah'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required', [
            'required' => 'Password tidak boleh kosong',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password]', [
            'required' => 'Password tidak boleh kosong',
            'matches' => 'Password tidak cocok'
        ]);
        $this->form_validation->set_rules('telp', 'Telp', 'required', [
            'required' => 'Nomor Telepon tidak boleh kosong'
        ]);
        $this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'required', [
            'required' => 'Tanggal Lahir harus diisi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/daftar');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $tanggal = $this->input->post('tanggal');
            $telp = $this->input->post('telp');
            $password2 = $this->input->post('password2');


            $data = [
                'id_user' => 'usr' . time(),
                'id_role' => 'adm1587565941',
                'nama_user' => $nama,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'tanggal_lahir' => strtotime($tanggal),
                'telp' => $telp,
                'username' => strtolower(explode(' ', $nama)[0]) . time(),
                'image' => $this->session->userdata('image'),
                'tanggal_daftar' => time(),
                'ip_address' => 0
            ];
            $this->UserModel->daftar($data);
            $this->session->unset_userdata('image');
            redirect('home');
        }
    }

    public function set_img()
    {
        $img = file_get_contents('php://input');
        $img_array = json_decode($img, true);

        $this->session->set_userdata(['image' => $img_array['image']]);
        // echo $img;
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
                    'id_user' => $user['id_user'],
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
