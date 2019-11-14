<?php
	class Galeri extends CI_Controller{
		function __construct(){
            parent::__construct();
            $this->load->model('m_tulisan');
            $this->load->model('m_galeri');
        }
function index()
    { 
        $y['title']='Galeri';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['foto'] = $this->m_galeri->get_galeri_by_album_id(2);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header',$y);
        $this->load->view('v_galeri',$x);
        $this->load->view('v_footer');	
        
    }
function vidio()
    {
        $y['title'] = "Dinas UKM dan Perdagangan-Pengumuman";
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['vidio'] = $this->m_galeri->get_galeri_by_album_id(3);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
	$this->load->view('v_header',$y);
	$this->load->view('v_vidio',$x);
	$this->load->view('v_footer');
    }

   

}