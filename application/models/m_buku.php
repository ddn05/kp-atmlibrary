<?php

class M_buku extends CI_Model{
    public function get_data(){
        return $this->db->get('tb_buku');
    }

    public function hapus_buku($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_buku($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_buku($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}