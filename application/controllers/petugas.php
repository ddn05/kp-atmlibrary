<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function index() {
        $data['title'] = 'ATM Library | Petugas';
        $data['petugas'] = $this->m_petugas->get_data()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('petugas/v_petugas',$data);
        $this->load->view('template/footer');
    }

    public function input_petugas(){
        $nama       = $this->input->post('nama');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password
        );

        if($this->db->insert('tb_petugas',$data)){
            $this->session->set_flashdata("success","Berhasil Menambahkan Data Anggota");
            redirect('petugas');
        }
        else{
            $this->session->set_flashdata("error","Gagal Menambahkan Data Anggota");
            redirect('petugas');
        }
    }

    public function hapus_petugas($id){
        $where = array(
            'id' => $id
        );

        $this->m_petugas->hapus($where,'tb_petugas');
        redirect('petugas');
    }
}
