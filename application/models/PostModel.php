<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PostModel extends CI_Model
{
    public function get_jenis_post()
    {
        return $this->db->get('jenis_post');
    }
}
