<?php

class M_user extends CI_Model{
    public function get_data(){
        return $this->db->get('tb_ebook');
    }

    public function baca($id){
        $query = $this->db->get_where('tb_ebook', array('id' => $id))->row();
        return $query;
    }
}