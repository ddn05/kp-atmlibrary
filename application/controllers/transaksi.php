<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function add(){
        // $w = array('buku_status' => '1');
        $data['buku'] = $this->m_master->get_data('tb_buku')->result();
        $data['anggota'] = $this->m_master->get_data('tb_anggota')->result();

        $data['title']    = 'ATM_Library | Peminjaman';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/v_pinjam',$data);
        $this->load->view('template/footer');
    }

    public function kembali(){
        $data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_anggota,tb_buku")->result();
        $data['title']    = 'ATM_Library | Pengembalian';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/v_kembali',$data);
        $this->load->view('template/footer');
    }
}