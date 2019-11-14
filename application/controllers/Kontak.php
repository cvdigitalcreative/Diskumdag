<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_kontak');
        $this->load->model('m_tulisan');
        $this->load->model('m_inbox');
    }
    
    function index()
    {
        $y['title']='Kontak';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header',$y);
        $this->load->view('v_kontak');
        $this->load->view('v_footer');	
    }

       function balas(){
    	$id = $this->input->post('id');
    	$pesan = $this->input->post('pesan');
    	$balas = $this->input->post('balas');

    	$this->m_tulisan->status($id);
        $this->m_tulisan->balas($id,$pesan,$balas);
        redirect('Admin/inbox');

    }

    function hapus(){
    	$id = $this->input->post('kode');
    	$this->m_inbox->hapus($id);
    	redirect('Admin/inbox');
    }

    function balas_edit(){
    	$id = $this->input->post('id');
    	$balas = $this->input->post('balas');

    	$this->m_inbox->edit_balasan($id,$balas);
    	redirect('Admin/inbox');
    }


  
}