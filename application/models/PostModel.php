<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PostModel extends CI_Model
{
    public function get_approve_post()
    {
        $this->db->select('nama_user,jam_buka,username,username,image,post.id_post,post.id_user,post.id_jenis_post,judul_post,alamat,konten,id_map,latitude,longitude,jenis_post');
        $this->db->from('post');
        $this->db->join('jenis_post', 'post.id_jenis_post = jenis_post.id_jenis_post');
        $this->db->join('maps', 'post.id_post = maps.id_post');
        $this->db->join('user', 'post.id_user = user.id_user');
        $this->db->where('approved', '0');
        return $this->db->get();
    }
    public function get_post_tempat_kuliner()
    {
        $this->db->select('nama_user,jam_buka,username,username,image,post.id_post,post.id_user,id_jenis_post,judul_post,alamat,konten,id_map,latitude,longitude');
        $this->db->from('post');
        $this->db->join('maps', 'post.id_post = maps.id_post');
        $this->db->join('user', 'post.id_user = user.id_user');
        $this->db->where('id_jenis_post', 'klr1587608474');
        $this->db->where('approved', '1');
        return $this->db->get();
    }
    public function get_post_event_kuliner()
    {
        $this->db->select('nama_user,tanggal,username,username,image,post.id_post,post.id_user,id_jenis_post,judul_post,alamat,konten,id_map,latitude,longitude');
        $this->db->from('post');
        $this->db->join('maps', 'post.id_post = maps.id_post');
        $this->db->join('user', 'post.id_user = user.id_user');
        $this->db->where('id_jenis_post', 'evt1587608520');
        $this->db->where('approved', '1');
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
    public function get_jumlah_tempat()
    {
        $this->db->select('id_post');
        $this->db->from('post');
        $this->db->where(['id_jenis_post' => 'klr1587608474']);
        $this->db->where(['approved' => '1']);
        return  $this->db->get()->num_rows();
    }
    public function get_jumlah_event()
    {
        $this->db->select('id_post');
        $this->db->from('post');
        $this->db->where(['id_jenis_post' => 'evt1587608520']);
        $this->db->where(['approved' => '1']);
        return  $this->db->get()->num_rows();
    }
    public function get_lokasi_terdaftar()
    {
        $this->db->select('maps.id_post');
        $this->db->from('maps');
        $this->db->join('post', 'post.id_post = maps.id_post');
        $this->db->where(['id_jenis_post' => 'klr1587608474']);
        $this->db->where(['approved' => '1']);
        return  $this->db->get()->num_rows();
    }
    public function approve_post($id_post)
    {
        $this->db->set('approved', '1');
        $this->db->where('id_post', $id_post);
        $this->db->update('post');
    }
    public function delete_post($id_post)
    {
        $this->db->where('id_post', $id_post);
        $this->db->delete('post');
    }
    public function delete_gambar($id_post)
    {
        $this->db->where('id_post', $id_post);
        $this->db->delete('gambar');
    }
    public function get_preview_post($id_post, $id_jenis_post)
    {
        if ($id_jenis_post == 'klr1587608474') {
            $this->db->select('nama_user,jam_buka,username,username,image,post.id_post,post.id_user,id_jenis_post,judul_post,alamat,konten,id_map,latitude,longitude');
            $this->db->from('post');
            $this->db->join('maps', 'post.id_post = maps.id_post');
            $this->db->join('user', 'post.id_user = user.id_user');
            $this->db->where('id_jenis_post', 'klr1587608474');
            $this->db->where('post.id_post', $id_post);
            $this->db->where('approved', '0');
            return $this->db->get();
        } else {
            $this->db->select('nama_user,tanggal,username,username,image,post.id_post,post.id_user,id_jenis_post,judul_post,alamat,konten,id_map,latitude,longitude');
            $this->db->from('post');
            $this->db->join('maps', 'post.id_post = maps.id_post');
            $this->db->join('user', 'post.id_user = user.id_user');
            $this->db->where('id_jenis_post', 'evt1587608520');
            $this->db->where('post.id_post', $id_post);
            $this->db->where('approved', '0');
            return $this->db->get();
        }
    }
}
