<?php
	class Pengumuman extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_galeri');
			$this->load->model('m_tulisan');
			$this->load->model('m_pengunjung');
			$this->load->model('m_tentang');
			$this->load->model('m_pengumuman');
			$this->m_pengunjung->count_visitor();
		}
	
		function index(){
			$y['title'] = "Dinas UKM dan Perdagangan-Pengumuman";
			$x['pengumuman'] = $this->m_pengumuman->get_all_pengumuman();
			$this->load->view('v_header',$y);
			$this->load->view('v_pengumuman',$x);
			$this->load->view('v_footer');
		}

		function detail()
		{
		    $y['title'] = "Dinas UKM dan Perdagangan-Pengumuan";
		    $slug = $this->uri->segment(3);	   
		    $link=$this->uri->segment(4);
		    $x['data'] = $this->m_pengumuman->get_join_table($slug);
		    $x['link_before']=$this->m_pengumuman->get_link_before($link);
		    $x['link_after']=$this->m_pengumuman->get_link_after($link);
		    $this->load->view('v_header',$y);
		    $this->load->view('v_detail_pengumuman',$x);
		    $this->load->view('v_footer');

		}


				

	}
?>