<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $this->load->view('v_login');
    }
    
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run() != false){
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );

            $data = $this->m_login->edit_data($where,'tb_petugas');
            $d    = $this->m_login->edit_data($where,'tb_petugas')->row();
            $cek  = $data->num_rows();
            
            if($cek > 0){
                $session = array(
                    'id'     => $d->id,
                    'nama'   => $d->nama,
                    'status' => 'login'
                );
                $this->session->set_userdata($session);
                redirect('dashboard');
            }
            else{
                redirect(base_url().'auth?pesan=gagal');
            }
        }
        else{
            $this->load->view('v_login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth?pesan=logout');
    }
}
