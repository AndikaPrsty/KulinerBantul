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
}
