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
    }
    public function tambah_tempat_kuliner()
    {
        $this->load->view('templates/header');
        $this->load->view('user/tambahkuliner');
        $this->load->view('templates/footer');
    }
    public function tambah_event()
    {
    }
}
