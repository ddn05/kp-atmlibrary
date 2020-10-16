<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gantipassword extends CI_Controller {
    public function index(){
        $data['title'] = 'ATM Library | Ganti Password';

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('v_gantipassword');
        $this->load->view('template/footer');
    }

    public function act(){
        $pass_baru      = $this->input->post('pass_baru');
        $ulangi_pass    = $this->input->post('ulangi_pass');
        
        $this->form_validation->set_rules('pass_baru','Password Baru', 'required|matches[ulang_pass]');
        $this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');

        if($this->form_validation->run() != false){
            $data = array(
                'password' =>md5($pass_baru)
            );
            $w = array(
                'id' => $this->session->userdata('id')
            );

            $this->m_login->update_data($w,$data,'tb_petugas');
            redirect('gantipassword?pesan=berhasil');
        }
        else{
            redirect('gantipassword?pesan=gagal');
        }
    }
}