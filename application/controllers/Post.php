<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('user');
        }
        // $this->session->set_userdata('id_post');

    }
    public function tambah_tempat_kuliner()
    {
        $id_post = 'pst' . time();
        $this->session->set_userdata(['id_post' => $id_post]);
        $this->load->view('templates/header');
        $this->load->view('user/tambahkuliner');
        $this->load->view('templates/footer');
    }
    public function tambah_event()
    {
        $id_post = 'pst' . time();
        $this->session->set_userdata(['id_post' => $id_post]);
        $this->load->view('templates/header');
        $this->load->view('user/tambahevent');
        $this->load->view('templates/footer');
    }
    public function set_post_img()
    {
        $img = file_get_contents('php://input');
        $img_array = json_decode($img, true);

        $data = [
            'id_gambar' => 'img' . time(),
            'id_post' => $this->session->userdata('id_post'),
            'gambar' => $img_array['gambar'],
            'image_ref' => $img_array['image_ref']
        ];
        $this->PostModel->set_post_img($data);
        var_dump($img_array);
    }
    public function set_post()
    {
        $post = file_get_contents('php://input');
        $jsonpost = json_decode($post, true);

        $data_post = [
            'id_post' => $this->session->userdata('id_post'),
            'id_user' => $this->session->userdata('id_user'),
            'id_jenis_post' => $jsonpost['id_jenis_post'],
            'judul_post' => $jsonpost['judul_post'],
            'jam_buka' => $jsonpost['jam_buka'],
            'alamat' => $jsonpost['alamat'],
            'konten' => $jsonpost['konten'],
            'tanggal' => $jsonpost['tanggal_event']
        ];
        $data_map = [
            'id_map' => 'map' . time(),
            'id_post' => $this->session->userdata('id_post'),
            'latitude' => $jsonpost['latitude'],
            'longitude' => $jsonpost['longitude']
        ];

        $this->PostModel->set_post_map($data_map);
        $this->PostModel->set_post($data_post);
    }
}
