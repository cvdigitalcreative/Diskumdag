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
			$jum=$this->m_pengumuman->get_all_pengumuman();
	        $page=$this->uri->segment(3);
	        if(!$page):
	            $offset = 0;
	        else:
	            $offset = $page;
	        endif;
	        $limit=4;
	        $config['base_url'] = base_url() . 'Pengumuman/index';
	        $config['total_rows'] = $jum->num_rows();
	        $config['per_page'] = $limit;
	        $config['uri_segment'] = 3;
	        $config['full_tag_open'] = "<ul class='nav nav-pills sort-source sort-source-style-3 justify-content-center'>";
		    $config['full_tag_close'] = '</ul>';
		    $config['num_tag_open'] = '<li>';
		    $config['num_tag_close'] = '</li>';
		    $config['cur_tag_open'] = '<li class="nav-item active"><a href="#">';
		    $config['cur_tag_close'] = '</a></li>';
		    $config['prev_tag_open'] = '<li class="nav-item">';
		    $config['prev_tag_close'] = '</li>';
		    $config['first_tag_open'] = '<li class="nav-item">';
		    $config['first_tag_close'] = '</li>';
		    $config['last_tag_open'] = '<li class="nav-item">';
		    $config['last_tag_close'] = '</li>';
		    
		    $config['prev_link'] = 'Previous Page';
		    $config['prev_tag_open'] = '<li class"nav-item">';
		    $config['prev_tag_close'] = '</li>';

		    $config['next_link'] = 'Next Page';
		    $config['next_tag_open'] = '<li class="nav-item">';
		    $config['next_tag_close'] = '</li>';

		    $this->pagination->initialize($config);
		    $y['title'] = "Dinas UKM dan Perdagangan-Pengumuan";
		    $x['page'] =$this->pagination->create_links();


			$y['title'] = "Dinas UKM dan Perdagangan-Pengumuman";
			$x['pengumuman'] = $this->m_pengumuman->pengumuman_per_page($offset,$limit);
			$this->load->view('v_header',$y);
			$this->load->view('v_pengumuman',$x);
			$this->load->view('v_footer');
		}

		function detail(){
			$y['title'] = 'Dinas UKM dan Perdagangan-Pengumuman';
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