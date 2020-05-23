<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->session->unset_userdata('id_post');
	}

	public function index()
	{
		$data = [
			'tempat_kuliner' => $this->PostModel->get_post_tempat_kuliner()->result_array(),
			'event_kuliner' => $this->PostModel->get_post_event_kuliner()->result_array()
		];
		$this->load->view('templates/user-header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/user-footer');
	}
	public function debugging()
	{
		// $img = $this->set_img()->img;
		var_dump($this->session->userdata());
	}
}
