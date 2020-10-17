<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
        function __construct(){
		parent::__construct();
		// cek login
		if($this->session->userdata('status') != "login"){
			redirect(base_url().'auth?pesan=belumlogin');
		}
	}
	public function index()
	{
        $data['title'] = 'ATM Library | Dashboard';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('v_dashboard');
        $this->load->view('template/footer');
    }
}
