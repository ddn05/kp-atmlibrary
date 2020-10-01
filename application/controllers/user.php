<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $data['title'] = 'ATM Library | Home';
        $data['ebook'] = $this->m_user->get_data()->result();

        $this->load->view('user/template/header',$data);
        $this->load->view('user/v_user',$data);
        $this->load->view('user/template/footer');
    }
    
    public function baca($id){
        $data['title'] = 'ATM Library | Baca';
        $data['baca'] = $this->m_user->baca($id);

        $this->load->view('user/v_baca',$data);
        $this->load->view('user/template/footer');
    }
}
