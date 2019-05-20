<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_galeri');
    }
    function index()
    { 
        $y['title']='Info Grafis';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(1);
        $this->load->view('v_header',$y);
        $this->load->view('v_infografis',$x);
        
    }
    function download()
    {
        $y['title']='Download';

        $this->load->view('v_header',$y);
        $this->load->view('v_download');
    }
}
