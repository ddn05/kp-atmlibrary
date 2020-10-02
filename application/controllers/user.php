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

    public function umum(){
        $data['kat'] = $this->m_user->umum()->result();
        $data['title'] = 'ATM Library | Umum';
        $data['kategori'] = 'Umum';

        $this->load->view('user/template/header2',$data);
        $this->load->view('user/v_umum',$data);
        $this->load->view('user/template/footer');
    }

    public function pemasaran(){
        $data['kat'] = $this->m_user->pemasaran()->result();
        $data['title'] = 'ATM Library | Pemasaran';
        $data['kategori'] = 'Pemasaran';

        $this->load->view('user/template/header2',$data);
        $this->load->view('user/v_umum',$data);
        $this->load->view('user/template/footer');
    }

    public function pariwisata(){
        $data['kat'] = $this->m_user->pariwisata()->result();
        $data['title'] = 'ATM Library | pariwisata';
        $data['kategori'] = 'pariwisata';

        $this->load->view('user/template/header2',$data);
        $this->load->view('user/v_umum',$data);
        $this->load->view('user/template/footer');
    }

    public function peternakan(){
        $data['kat'] = $this->m_user->peternakan()->result();
        $data['title'] = 'ATM Library | peternakan';
        $data['kategori'] = 'peternakan';

        $this->load->view('user/template/header2',$data);
        $this->load->view('user/v_umum',$data);
        $this->load->view('user/template/footer');
    }

    public function vokasi(){
        $data['kat'] = $this->m_user->vokasi()->result();
        $data['title'] = 'ATM Library | vokasi';
        $data['kategori'] = 'vokasi';

        $this->load->view('user/template/header2',$data);
        $this->load->view('user/v_umum',$data);
        $this->load->view('user/template/footer');
    }

    public function inspirasi(){
        $data['kat'] = $this->m_user->inspirasi()->result();
        $data['title'] = 'ATM Library | inspirasi';
        $data['kategori'] = 'inspirasi';

        $this->load->view('user/template/header2',$data);
        $this->load->view('user/v_umum',$data);
        $this->load->view('user/template/footer');
    }
}
