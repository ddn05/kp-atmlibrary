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
        $data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_anggota,tb_buku where nis_anggota=nis and kode_buku=kode")->result();
        $data['title']    = 'ATM_Library | Pengembalian';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/v_kembali',$data);
        $this->load->view('template/footer');
    }

    public function act(){
        $nis_anggota = $this->input->post('nis_anggota');
        $kode_buku = $this->input->post('kode_buku');
        $tgl_pinjam = $this->input->post('tgl_pinjam');
        $tgl_kembali = $this->input->post('tgl_kembali');
        $denda = $this->input->post('denda');

        $this->form_validation->set_rules('nis','NIS','required');
        $this->form_validation->set_rules('kode','Kode','required');
        $this->form_validation->set_rules('denda','Denda','required');

        if($this->form_validation->run() == false){
            $data = array(
                'id_petugas' => $this->session->userdata('id'),
                'nis_anggota' => $nis_anggota,
                'kode_buku' => $kode_buku,
                'tgl_pinjam' => $tgl_pinjam,
                'tgl_kembali' => $tgl_kembali,
                'denda' => $denda
            );

            $this->m_master->insert_data($data,'tb_transaksi');

            //update stok buku
            $this->db->where('kode', $kode_buku);
            $this->db->select('stok');
            $this->db->from('tb_buku');
            $data = $this->db->get();

            $stok = $data->row_array();

            $hasil = $stok['stok'] - 1;

            //update stok buku
            $d = array(
                'stok' => $hasil
            ); 
            $w= array(
                'kode' => $kode_buku
            );

            $this->m_master->update_data($w,$d,'tb_buku');

            redirect('transaksi/add');
        }
        else{
            redirect('transaksi/add');
        }
    }

    public function batal($id){
        $w = array(
            'id_transaksi' => $id
        );

        $data = $this->m_master->edit_data($w,'tb_transaksi')->row();

        $ww = array(
            'kode' =>$data->kode_buku
        );

        $kode_buku=$data->kode_buku;
        
        //update stok buku
        $this->db->where('kode', $kode_buku);
        $this->db->select('stok');
        $this->db->from('tb_buku');
        $data = $this->db->get();

        $stok = $data->row_array();

        $hasil = $stok['stok'] + 1;

        $upstok = array(
            'stok' => $hasil
        );

        $this->m_master->update_data($ww,$upstok,'tb_buku');

        $this->m_master->delete_data($w,'tb_transaksi');

        redirect('transaksi/kembali');
    }
}