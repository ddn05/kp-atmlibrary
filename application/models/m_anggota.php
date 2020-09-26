<?php

class M_anggota extends CI_Model{
    public function get_data(){
        return $this->db->get('tb_anggota');
    }

    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_anggota($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_anggota($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}