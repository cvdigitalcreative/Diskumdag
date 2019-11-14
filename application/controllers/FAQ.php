<?php 
class FAQ extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_galeri');
			$this->load->model('m_tulisan');
			$this->load->model('m_pengunjung');
			$this->load->model('m_tentang');
			$this->load->model('m_pengumuman');
			$this->load->model('m_inbox');
			$this->m_pengunjung->count_visitor();
		}

		function index(){
			$y['title'] = "Dinas Koperasi dan UKM provinsi Sumatera Selatan/FAQ";
                        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
			$y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
			$x['data'] = $this->m_inbox->get_all_inbox();
			$this->load->view('v_header',$y);
			$this->load->view('v_FAQ',$x);
			$this->load->view('v_footer');
			
		}
	}

?>