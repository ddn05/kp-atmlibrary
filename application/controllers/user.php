<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $data['title'] = 'ATM Library | Home';

        $this->load->view('user/template/header',$data);
        $this->load->view('user/v_user');
        $this->load->view('user/template/footer');
	}
}
