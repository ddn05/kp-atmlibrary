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
}