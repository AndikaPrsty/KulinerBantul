<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PostModel extends CI_Model
{
    public function get_jenis_post()
    {
        return $this->db->get('jenis_post');
    }
    public function set_post_img($data)
    {
        $this->db->insert('gambar', $data);
    }
    public function set_post_map($data)
    {
        $this->db->insert('maps', $data);
    }
    public function set_post($data)
    {
        $this->db->insert('post', $data);
    }
}
