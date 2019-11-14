<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_galeri');
        $this->load->model('m_tulisan');
	$this->load->model('m_pengunjung');
	$this->load->model('m_tentang');
	$this->load->model('m_pengumuman');
        $this->load->model('m_kontak');
    }
    function index()
    { 
        $y['title'] = 'Info grafis';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);    
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);    
        $this->load->view('v_header',$y);
        $this->load->view('v_infografis');
	$this->load->view('v_footer');
        
    }
    function download()
    {
        $y['title']='Download';
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header',$y);
        $this->load->view('v_download');
        $this->load->view('v_footer');	
    }
    function pesan()
    {
        $y['title']='Kontak';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $pesan=$this->input->post('pesan');
        $this->m_kontak->kirim_pesan($nama,$email,$pesan);
        $this->load->view('v_header',$y);
        $this->load->view('v_kontak');
        $this->load->view('v_footer');	
    }
  
}
