<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();


        $this->load->model('m_kontak');
    }
    
    function index()
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