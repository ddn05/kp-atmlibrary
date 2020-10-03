<?php

class M_user extends CI_Model{
    public function get_data(){
        return $this->db->get('tb_ebook');
    }

    public function baca($id){
        $query = $this->db->get_where('tb_ebook', array('id' => $id))->row();
        return $query;
    }

    public function umum(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'umum'));
    }
    
    public function pemasaran(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'pemasaran'));
    }

    public function pariwisata(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'pariwisata'));
    }

    public function peternakan(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'peternakan'));
    }

    public function vokasi(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'vokasi'));
    }

    public function inspirasi(){
        return $this->db->get_where('tb_ebook', array('kategori' => 'inspirasi'));
    }

    public function cari_data($keyword){
        $this->db->select('*');
        $this->db->from('tb_ebook');
        $this->db->like('judul',$keyword);
        $this->db->or_like('penulis',$keyword);

        return $this->db->get()->result();
    }
}