<?php

class M_buku extends CI_Model{
    public function get_data(){
        return $this->db->get('tb_buku');
    }
}