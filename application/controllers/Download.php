<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

function __construct(){

        parent::__construct();
        $this->load->model('m_galeri');
	$this->load->model('m_tulisan');
	$this->load->model('m_pengunjung');
	$this->load->model('m_tentang');
	$this->load->model('m_pengumuman');
}
function index()
    {
        $y['title']='Download';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['download'] = $this->m_tulisan->get_tulisan_by_kategori(21);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header',$y);
        $this->load->view('v_download',$x);
        $this->load->view('v_footer');	
    }
}
