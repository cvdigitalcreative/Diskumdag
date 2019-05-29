<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_galeri');
        $this->load->model('m_kontak');
    }
    function index()
    { 
        $y['title']='Info Grafis';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(1);
        $this->load->view('v_header',$y);
        $this->load->view('v_infografis',$x);
        $this->load->view('v_footer');	
        
    }
    function download()
    {
        $y['title']='Download';

        $this->load->view('v_header',$y);
        $this->load->view('v_download');
        $this->load->view('v_footer');	
    }
    function pesan()
    {
        $y['title']='Kontak';
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $pesan=$this->input->post('pesan');
        $this->m_kontak->kirim_pesan($nama,$email,$pesan);
        $this->load->view('v_header',$y);
        $this->load->view('v_kontak');
        $this->load->view('v_footer');	
    }
  
}
