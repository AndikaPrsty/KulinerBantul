<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function index()
    {
        $jumlah_member = $this->UserModel->get_jumlah_member();
        $jumlah_tempat_kuliner = $this->PostModel->get_jumlah_tempat();
        $jumlah_event_kuliner = $this->PostModel->get_jumlah_event();
        $jumlah_lokasi_terdaftar = $this->PostModel->get_lokasi_terdaftar();

        $data = [
            'post' => $this->PostModel->get_approve_post()->result_array(),
            'jumlah_member' => $jumlah_member,
            'jumlah_tempat_kuliner' => $jumlah_tempat_kuliner,
            'jumlah_event_kuliner' => $jumlah_event_kuliner,
            'jumlah_lokasi_terdaftar' => $jumlah_lokasi_terdaftar
        ];

        $this->load->view('templates/admin-header');
        $this->load->view('templates/admin-sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin-footer');
    }
    public function approve_post($id_post)
    {
        $this->PostModel->approve_post($id_post);
        redirect('admin');
    }
    public function reject_post($id_post)
    {
        $this->PostModel->delete_post($id_post);
        $this->PostModel->delete_gambar($id_post);
        redirect('admin');
    }
    public function preview_post($id_post, $id_jenis_post)
    {
        $post = $this->PostModel->get_preview_post($id_post, $id_jenis_post)->row_array();
        $data = [
            'post' => $post
        ];
        // $this->load->view('templates/user-header');
        $this->load->view('admin/preview', $data);
        // $this->load->view('templates/user-footer');
    }
}
