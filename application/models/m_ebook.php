<?php

class M_ebook extends CI_Model{
    public function get_data(){
        return $this->db->get('tb_ebook');
    }

    public function hapus_ebook($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_ebook($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_ebook($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
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
}