<?php
	class Galeri extends CI_Controller{
		function __construct(){
            parent::__construct();

            $this->load->model('m_galeri');
        }
function index()
    { 
        $y['title']='Galeri';
        $x['info3'] = $this->m_galeri->get_galeri_by_album_id(3);
        $x['info4'] = $this->m_galeri->get_galeri_by_album_id(4);
        $x['info5'] = $this->m_galeri->get_galeri_by_album_id(5);
        $x['info6'] = $this->m_galeri->get_galeri_by_album_id(6);
        $this->load->view('v_header',$y);
        $this->load->view('v_galeri',$x);
        $this->load->view('v_footer');	
        
    }
}