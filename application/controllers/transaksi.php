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
        $data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_anggota,tb_buku where nis_anggota=nis and kode_buku=kode and status IS NULL")->result();
        $data['title']    = 'ATM_Library | Pengembalian';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/v_kembali',$data);
        $this->load->view('template/footer');
    }

    public function lappinjam(){
        $data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_anggota,tb_buku where nis_anggota=nis and kode_buku=kode and status IS NULL")->result();
        $data['title']    = 'ATM_Library | Laporan Peminjaman';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/v_lappinjam',$data);
        $this->load->view('template/footer');
    }

    public function lapkembali(){
        $data['title']    = 'ATM_Library | Laporan Transaksi';

        $dari   = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $this->form_validation->set_rules('dari','Dari Tanggal','required');
        $this->form_validation->set_rules('sampai','Sampai Tanggal','required');
        
        if($this->form_validation->run() != false){
            $data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_anggota,tb_buku where nis_anggota=nis and kode_buku=kode and date(tgl_dikembalikan)>='$dari'")->result();

            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar');
            $this->load->view('transaksi/v_lapkembali',$data);
            $this->load->view('template/footer');
        }
        else{
            $this->load->view('template/header',$data);
            $this->load->view('template/sidebar');
            $this->load->view('transaksi/v_filterlaporan');
            $this->load->view('template/footer');
        }
        
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

        $petugas = $this->session->userdata('id');

        if($this->form_validation->run() == false){
            $data = array(
                'id_petugas' => $petugas,
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

            redirect('transaksi/add?pesan=berhasil');
        }
        else{
            redirect('transaksi/add?pesan=gagal');
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

    public function selesai($id){
        $data['buku']      = $this->m_master->get_data('tb_buku')->result();
        $data['anggota']   = $this->m_master->get_data('tb_anggota')->result();
        $data['transaksi'] = $this->db->query("select * from tb_transaksi,tb_anggota,tb_buku where nis_anggota=nis and kode_buku=kode and id_transaksi='$id'")->result();
        $data['title']    = 'ATM_Library | Pengembalian';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('transaksi/v_selesai',$data);
        $this->load->view('template/footer');
    }

    public function selesai_act2(){
        $id_transaksi       = $this->input->post('id_transaksi');
        // $nis_anggota        = $this->input->post('nis_anggota');
        $nama               = $this->input->post('nama');
        // $kode_buku          = $this->input->post('kode_buku');
        $judul              = $this->input->post('judul');
        $tgl_pinjam         = $this->input->post('tgl_pinjam');
        $tgl_dikembalikan   = $this->input->post('tgl_dikembalikan');
        $denda              = $this->input->post('denda');

        $this->form_validation->set_rules('tgl_dikembalikan','Transaksi dikembalikan','required');

        if($this->form_validation->run() != false){
            //menghitung selisih hari
            $batas = strtotime($tgl_kembali);
            $dikembalikan = strtotime($tgl_dikembalikan);
            $selisih = abs(($batas-$dikembalikan)/(60*60*24));

            
            //total denda
            $denda = 1000;
            $tot_denda = $denda*$selisih;

            //update transaksi
            $data = array(
                'nis_anggota'       => $nis_anggota,
                'kode_buku'         => $kode_buku,
                'tgl_dikembalikan'  => $tgl_dikembalikan,
                'status'            => 'Selesai',
                'total_denda'       => $tot_denda
            );

            $w = array(
                'id_transaksi' => $id_transaksi
            );

            $this->m_master->update_data($w,$data,'tb_transaksi');

            //update stok buku
            $this->db->where('kode', $kode_buku);
            $this->db->select('stok');
            $this->db->from('tb_buku');
            $data = $this->db->get();

            $stok = $data->row_array();

            $hasil = $stok['stok'] + 1;

            $data2 = array(
                'stok' => $hasil
            );
            
            $w2 = array(
                'kode' => $judul
            );

            $this->m_master->update_data($w2,$data2,'tb_buku');
            redirect('transaksi/kembali?pesan=berhasil');
        }
        else{
            redirect('transaksi/kembali?pesan=gagal');
        }
    }

    public function selesai_act(){
        $id                 = $this->input->post('id');
        $tgl_dikembalikan   = $this->input->post('tgl_dikembalikan');
        $tgl_kembali        = $this->input->post('tgl_kembali');
        $kode_buku          = $this->input->post('kode_buku');
        $denda              = $this->input->post('denda');

        $this->form_validation->set_rules('tgl_dikembalikan','Tanggal dikembalikan','required');

        if($this->form_validation->run() != false){
            
            // $batas = strtotime($tgl_kembali);
            // $dikembalikan = strtotime($tgl_dikembalikan);
            // $selisih = abs(($batas - $dikembalikan)/(60*60*24));

            $batas = date_create($tgl_kembali);
            $kembali = date_create($tgl_dikembalikan);
            $diff=date_diff($batas,$kembali);
            $sel = $diff->d;
            if($kembali > $batas){
                $total_denda = $denda*$sel;
            }
            else{
                $total_denda = 0;
            }
            
           
            //update
            $data = array(
                'tgl_dikembalikan' => $tgl_dikembalikan,
                'status' => 'Selesai',
                'total_denda' => $total_denda
            );
            $w = array(
                'id_transaksi' => $id
            );

            $this->m_master->update_data($w,$data,'tb_transaksi');

            //update data buku
            $this->db->where('kode', $kode_buku);
            $this->db->select('stok');
            $this->db->from('tb_buku');
            $data = $this->db->get();

            $stok = $data->row_array();

            $hasil = $stok['stok'] + 1;

            $data2 = array(
                'stok' => $hasil
            );
            $w2 = array(
                'kode' => $kode_buku
            );

            $this->m_master->update_data($w2,$data2,'tb_buku');

            redirect('transaksi/kembali?pesan=berhasil');
        }
        else{
            redirect('transaksi/kembali?pesan=gagal');
        }
    }
}