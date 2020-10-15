<?php

class M_petugas extends CI_Model{
    public function get_data(){
        return $this->db->get('tb_petugas');
    }

    public function hapus($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}