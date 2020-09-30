<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {

	public function index()
	{
        $data['title'] = 'ATM Library | Data Ebook';
        $data['ebook'] = $this->m_ebook->get_data()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_data_ebook',$data);
        $this->load->view('template/footer');
    }
    
    public function input_data(){
        $file = $_FILES;

        $judul      = $this->input->post('judul');
        $penulis    = $this->input->post('penulis');
        $kategori   = $this->input->post('kategori');


            $config = array();
            $config ['upload_path'] = './uploads/img';
            $config ['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload',$config,'coverupload');
            $this->coverupload->initialize($config);
            $coverupload = $this->coverupload->do_upload('cover');
            
            $data1 = $this->coverupload->data();

            $config = array();
            $config ['upload_path'] = './uploads/pdf';
            $config ['allowed_types'] = 'pdf';

            $this->load->library('upload',$config,'ebookupload');
            $this->ebookupload->initialize($config);
            $ebookupload = $this->ebookupload->do_upload('ebook');
            
            $data2 = $this->ebookupload->data();


        $cover      = $data1['file_name'];
        $ebook      = $data2['file_name'];

        $data = array(
            'judul'     => $judul,
            'penulis'   => $penulis,
            'kategori'  => $kategori,
            'cover'     => $cover,
            'ebook'     => $ebook
        );

        if($this->db->insert('tb_ebook',$data)){
            $this->session->set_flashdata("success","Berhasil Menambahkan Data Ebook");
            redirect('ebook');
        }
        else{
                $this->session->set_flashdata("error","Gagal Menambahkan Data Ebook");
                redirect('ebook');
        }
    }

    public function hapus_ebook($id){
        $where = array(
                'id' => $id
        );

        $this->m_ebook->hapus_ebook($where,'tb_ebook');
        redirect('ebook');
    }

    public function edit_ebook($id){
        $data['title'] = 'ATM Library | Edit Ebook';
        $where = array(
                'id' => $id
        );
        $data['ebook'] = $this->m_ebook->edit_ebook($where,'tb_ebook')->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_edit_ebook',$data);
        $this->load->view('template/footer');
    }

    public function update_ebook(){
        $file = $_FILES;

        $id         = $this->input->post('id');
        $judul      = $this->input->post('judul');
        $penulis    = $this->input->post('penulis');
        $kategori   = $this->input->post('kategori');


        //     $config = array();
        //     $config ['upload_path'] = './uploads/img';
        //     $config ['allowed_types'] = 'jpg|jpeg|png';

        //     $this->load->library('upload',$config,'coverupload');
        //     $this->coverupload->initialize($config);
        //     $coverupload = $this->coverupload->do_upload('cover');
            
        //     $data1 = $this->coverupload->data();

        // $cover      = $data1['file_name'];

        $data = array(
            'judul'     => $judul,
            'penulis'   => $penulis,
            'kategori'  => $kategori,
        );
        // if($cover = ''){
        // }
        // else{
        //     $data = array(
        //         'cover'     => $cover
        //     );
        // }

        $where = array(
            'id'       => $id
        );

        $this->m_ebook->update_ebook($where,$data,'tb_ebook');
        redirect('ebook');
    }

    public function eb_umum(){
        $data['title'] = 'ATM Library | Ebook Umum';
        $data['ebook'] = $this->m_ebook->umum()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_eb_umum',$data);
        $this->load->view('template/footer');
    }

    public function eb_pemasaran(){
        $data['title'] = 'ATM Library | Ebook Pemasaran';
        $data['ebook'] = $this->m_ebook->pemasaran()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_eb_pemasaran',$data);
        $this->load->view('template/footer');
    }

    public function eb_pariwisata(){
        $data['title'] = 'ATM Library | Ebook Pariwisata';
        $data['ebook'] = $this->m_ebook->pariwisata()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_eb_pariwisata',$data);
        $this->load->view('template/footer');
    }

    public function eb_peternakan(){
        $data['title'] = 'ATM Library | Ebook Peternakan';
        $data['ebook'] = $this->m_ebook->peternakan()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_eb_peternakan',$data);
        $this->load->view('template/footer');
    }

    public function eb_vokasi(){
        $data['title'] = 'ATM Library | Ebook Vokasi';
        $data['ebook'] = $this->m_ebook->vokasi()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_eb_vokasi',$data);
        $this->load->view('template/footer');
    }

    public function eb_inspirasi(){
        $data['title'] = 'ATM Library | Ebook Inspirasi';
        $data['ebook'] = $this->m_ebook->inspirasi()->result();

        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar');
        $this->load->view('ebook/v_eb_inspirasi',$data);
        $this->load->view('template/footer');
    }
}
