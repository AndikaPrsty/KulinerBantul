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
        if($this->session->userdata('email')){
            $data['user'] = $this->UserModel->getUser(['email' => $this->session->userdata('email')])->result_array();
            $this->load->view('templates/user-header');
            $this->load->view('templates/user-sidebar');
            $this->load->view('user/profile',$data);
            $this->load->view('templates/user-footer');
        } else {
            redirect('home');
        }
    }
    public function ubah_profil()
    {
        $data = [
            'nama_user' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
        ];

        $this->form_validation->set_rules('nama','Nama Lengkap','required',[
            'required' => 'Jangan Kosongkan Form'
        ]);
        $this->form_validation->set_rules('telp','No Telepon','required',[
            'required' => 'Jangan Kosongkan Form'
        ]);

        if($this->form_validation->run() == FALSE){
            $data['user'] = $this->UserModel->getUser(['email' => $this->session->userdata('email')])->result_array();
            $this->load->view('templates/user-header');
            $this->load->view('templates/user-sidebar');
            $this->load->view('user/profile',$data);
            $this->load->view('templates/user-footer');
        } else {

            $this->UserModel->updateUser($data);
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
            data berhail diubah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('/user');
        }
    }
    public function ubah_password()
    {
        $passwordlama = $this->input->post('passwordlama');
        $hash = $this->UserModel->getUser(['email' => $this->session->userdata('email')])->result_array()[0];
        if(password_verify($passwordlama,$hash['password']))
        {
            $this->form_validation->set_rules('password1','Password','required',[
                'required' => 'Silahkan isi password baru'
            ]);
            $this->form_validation->set_rules('password2','Password','matches[password1]',[
                'matches' => 'Password tidak cocok'
            ]);
            if ($this->form_validation->run() == FALSE) {
                $data['user'] = $this->UserModel->getUser(['email' => $this->session->userdata('email')])->result_array();
                $this->load->view('templates/user-header');
                $this->load->view('templates/user-sidebar');
                $this->load->view('user/profile',$data);
                $this->load->view('templates/user-footer');
            } else {
                $password = $this->input->post('password1');
                $data = [
                    'password' => password_hash($password,PASSWORD_DEFAULT)
                ];
                $this->UserModel->updatePassword($data);
                $this->session->set_flashdata('pw_msg','<div class="alert alert-success alert-dismissible fade show" role="alert">Password Anda Berhasil Diubah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('/user');
            }
        } else {
            $this->session->set_flashdata('error','<small class="text-danger">Password Salah</small>');
            redirect('/user');
        }
    }
    public function user_posts()
    {
        $data = [
            'tempat_kuliner' => $this->PostModel->get_user_post_tempat_kuliner()->result_array(),
            'event_kuliner' => $this->PostModel->get_user_post_event_kuliner()->result_array(),
        ];
        $this->load->view('templates/user-header');
        $this->load->view('templates/user-sidebar');
        $this->load->view('user/userposts',$data);
        $this->load->view('templates/user-footer');
    }
    public function editkuliner()
    {
        $id_post = $this->uri->segment(3);
        $data = [
            'tempat_kuliner' => $this->PostModel->get_edit_user_post_tempat_kuliner($id_post)->result_array()[0]
        ];
        $this->load->view('templates/user-header');
        $this->load->view('user/edit_tempat_kuliner',$data);
        $this->load->view('templates/user-footer');
    }
    public function updatekuliner()
    {
        $this->form_validation->set_rules('judul_post','Nama Tempat','required',['required' => 'Nama Tempat Tidak Boleh Dikosongkan']);
        $this->form_validation->set_rules('alamat','Alamat','required',['required' => 'Alamat Tidak Boleh Dikosongkan']);
        $this->form_validation->set_rules('jam_buka','Jam Buka','required',['required' => 'Jam Buka Tidak Boleh Dikosongkan']);
        $this->form_validation->set_rules('deskripsi','Deskripsi','required',['required' => 'Deskipsi Tidak Boleh Dikosongkan']);
        if ($this->form_validation->run() == false) {
            $id_post = $this->uri->segment(3);
            $data = [
                'tempat_kuliner' => $this->PostModel->get_edit_user_post_tempat_kuliner($id_post)->result_array()[0]
            ];
            $this->load->view('templates/user-header');
            $this->load->view('user/edit_tempat_kuliner',$data);
            $this->load->view('templates/user-footer');
        } else {
            $data = [
                'judul_post' => $this->input->post('judul_post'),
                'alamat' => $this->input->post('alamat'),
                'konten' => $this->input->post('deskripsi'),
                'jam_buka' => $this->input->post('jam_buka'),
            ];
            $map = [
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
            ];
            $id_post = $this->uri->segment(3);
            $this->PostModel->update_post_kuliner($data,$id_post);
            $this->PostModel->update_post_map($map,$id_post);
            redirect('/user/user_posts');
        }
    }
    public function editevent()
    {
        $id_post = $this->uri->segment(3);
        $data = [
            'event_kuliner' => $this->PostModel->get_edit_user_post_event_kuliner($id_post)->result_array()[0]
        ];
        $this->load->view('templates/user-header');
        $this->load->view('user/edit_event_kuliner',$data);
        $this->load->view('templates/user-footer');
    }
    public function updateevent()
    {
        $this->form_validation->set_rules('judul_post','Nama Tempat','required',['required' => 'Nama Tempat Tidak Boleh Dikosongkan']);
        $this->form_validation->set_rules('alamat','Alamat','required',['required' => 'Alamat Tidak Boleh Dikosongkan']);
        $this->form_validation->set_rules('tanggal_event','tanggal event','required',['required' => 'Tanggal Event Tidak Boleh Dikosongkan']);
        $this->form_validation->set_rules('deskripsi','Deskripsi','required',['required' => 'Deskipsi Tidak Boleh Dikosongkan']);
        if ($this->form_validation->run() == false) {
            $id_post = $this->uri->segment(3);
            $data = [
                'tempat_kuliner' => $this->PostModel->get_edit_user_post_tempat_kuliner($id_post)->result_array()[0]
            ];
            $this->load->view('templates/user-header');
            $this->load->view('user/edit_event_kuliner',$data);
            $this->load->view('templates/user-footer');
        } else {
            $data = [
                'judul_post' => $this->input->post('judul_post'),
                'alamat' => $this->input->post('alamat'),
                'konten' => $this->input->post('deskripsi'),
                'tanggal' => $this->input->post('tanggal_event'),
            ];
            $map = [
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
            ];
            $id_post = $this->uri->segment(3);
            $this->PostModel->update_post_kuliner($data,$id_post);
            $this->PostModel->update_post_map($map,$id_post);
            redirect('/user/user_posts');
        }
    }
    public function deletepost()
    {
        $id_post = $this->uri->segment(3);
        $this->PostModel->delete_post($id_post);
        $this->PostModel->delete_gambar($id_post);
        $this->PostModel->delete_map($id_post);
        redirect('/user/user_posts');
    }
    public function login()
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

            if ($this->session->userdata('image')) {
                $gambar = $this->session->userdata('image');
            } else {
                $gambar = 'default.jpg';
            }

            $data = [
                'id_user' => 'usr' . time(),
                'id_role' => 'mbr1587565962',
                'nama_user' => $nama,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'tanggal_lahir' => strtotime($tanggal),
                'telp' => $telp,
                'username' => strtolower(explode(' ', $nama)[0]) . time(),
                'image' => $gambar,
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
                if ($this->session->userdata('id_role') == 'mbr1587565962') {
                    redirect();
                } else {
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<h4 style="color:red">password salah</h4>');
                redirect('user');
            }
        } else {
            $this->session->set_flashdata('message', '<h4 style="color:red">user tidak ditemukan</h4>');
            redirect('user');
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
