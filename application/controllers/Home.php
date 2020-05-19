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
		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
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
			$this->load->view('home/daftar');
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
				'tanggal_lahir' => strtotime('20-06-1999'),
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
	public function debugging()
	{
		// $img = $this->set_img()->img;
		var_dump($this->session->userdata());
	}
}
