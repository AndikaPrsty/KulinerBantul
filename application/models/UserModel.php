<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function daftar($data)
    {
        $this->db->insert('user', $data);
    }
    public function getUser($data)
    {
        return $this->db->get_where('user', $data);
    }
    public function get_jumlah_member()
    {
        return $this->db->get_where('user', ['id_role' => 'mbr1587565962'])->num_rows();
    }
}
