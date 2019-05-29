<?php
	class Galeri extends CI_Controller{
		function __construct(){
            parent::__construct();

            $this->load->model('m_galeri');
        }
function index()
    { 
        $y['title']='Galeri';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(2);
        $this->load->view('v_header',$y);
        $this->load->view('v_galeri',$x);
        $this->load->view('v_footer');	
        
    }
}