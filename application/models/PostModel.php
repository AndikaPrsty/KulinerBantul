<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PostModel extends CI_Model
{
    public function get_post_tempat_kuliner()
    {
        $this->db->select('nama_user,jam_buka,username,username,image,post.id_post,post.id_user,id_jenis_post,judul_post,alamat,konten,id_map,latitude,longitude');
        $this->db->from('post');
        $this->db->join('maps', 'post.id_post = maps.id_post');
        $this->db->join('user', 'post.id_user = user.id_user');
        $this->db->where('id_jenis_post', 'klr1587608474');
        return $this->db->get();
    }
    public function get_post_event_kuliner()
    {
        $this->db->select('nama_user,tanggal,username,username,image,post.id_post,post.id_user,id_jenis_post,judul_post,alamat,konten,id_map,latitude,longitude');
        $this->db->from('post');
        $this->db->join('maps', 'post.id_post = maps.id_post');
        $this->db->join('user', 'post.id_user = user.id_user');
        $this->db->where('id_jenis_post', 'evt1587608520');
        return $this->db->get();
    }
    public function get_gambar_post($data)
    {
        return $this->db->get_where('gambar', ['id_post' => $data]);
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
