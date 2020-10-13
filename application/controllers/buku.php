<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
        $data['title'] = 'ATM Library | Buku';
        $data['buku'] = $this->m_buku->get_data()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('buku/v_buku');
        $this->load->view('template/footer');
        }
        
        public function input_data(){
                $kode     = $this->input->post('kode');
                $judul    = $this->input->post('judul');
                $penulis  = $this->input->post('penulis');
                $tahun    = $this->input->post('tahun');
                $penerbit = $this->input->post('penerbit');
                $stok     = $this->input->post('stok');

                $data = array(
                        'kode'          => $kode,
                        'judul'         => $judul,
                        'penulis'       => $penulis,
                        'tahun'         => $tahun,
                        'penerbit'      => $penerbit,
                        'stok'          => $stok
                );

                if($this->db->insert('tb_buku',$data)){
                        $this->session->set_flashdata("success","Berhasil Menambahkan Data Buku");
                        redirect('buku');
                }
                else{
                        $this->session->set_flashdata("error","Gagal Menambahkan Data Buku");
                        redirect('buku');
                }
        }
}
