<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function index()
	{
                $data['title'] = 'ATM Library | Anggota';
                $data['anggota'] = $this->m_anggota->get_data()->result();
                
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar');
                $this->load->view('v_anggota',$data);
                $this->load->view('template/footer');
        }
        
        public function input_data(){
                $nis = $this->input->post('nis');
                $nama = $this->input->post('nama');
                $jk = $this->input->post('jk');
                $kelas = $this->input->post('kelas');
                $jurusan = $this->input->post('jurusan');

                $data = array(
                        'nis' => $nis,
                        'nama' => $nama,
                        'jk' => $jk,
                        'kelas' => $kelas,
                        'jurusan' => $jurusan
                );

                if($this->db->insert('tb_anggota',$data)){
                        $this->session->set_flashdata("success","Berhasil Menambahkan Data Anggota");
                        redirect('anggota');
                }
                else{
                        $this->session->set_flashdata("error","Gagal Menambahkan Data Anggota");
                        redirect('anggota/mana');
                }

                

                // if($nama == '' && $nis == ''){
                //         redirect('anggota');   
                // }
                // else{
                //         $this->m_anggota->input_data($data,'tb_anggota');
                //         redirect('anggota');
                // }
        }

        public function hapus_anggota($nis){
                $where = array(
                        'nis' => $nis
                );

                $this->m_anggota->hapus_anggota($where,'tb_anggota');
                redirect('anggota');
        }

        public function edit_anggota($nis){
                $data['title'] = 'ATM Library | Edit Anggota';
                $where = array(
                        'nis' => $nis
                );
                $data['anggota'] = $this->m_anggota->edit_anggota($where,'tb_anggota')->result();

                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar');
                $this->load->view('v_edit_ang',$data);
                $this->load->view('template/footer');
        }

        public function update_anggota(){
                $nis = $this->input->post('nis');
                $nama = $this->input->post('nama');
                $jk = $this->input->post('jk');
                $kelas = $this->input->post('kelas');
                $jurusan = $this->input->post('jurusan');

                $data = array(
                        'nama' => $nama,
                        'jk' => $jk,
                        'kelas' => $kelas,
                        'jurusan' => $jurusan
                );

                $where = array(
                        'nis' => $nis
                );

                $this->m_anggota->update_anggota($where,$data,'tb_anggota');
                redirect('anggota');
        }

        public function laporan_anggota(){
                $data['title'] = 'ATM Library | Laporan Data Anggota';
                $data['anggota'] = $this->m_anggota->get_data()->result();
                
                $this->load->view('template/header',$data);
                $this->load->view('template/sidebar');
                $this->load->view('v_lapdataanggota',$data);
                $this->load->view('template/footer');
        }
}
