<?php
	class Pelayanan extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_galeri');
			$this->load->model('m_tulisan');
			$this->load->model('m_pengunjung');
			$this->load->model('m_tentang');
			$this->m_pengunjung->count_visitor();
		}

		function index(){
			$y['title'] = "Dinas UKM dan Perdagangan";
                        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
			$x['pelayanan'] = $this->m_tulisan->get_tulisan_by_kategori(10);
                        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
			$this->load->view('v_header',$y);
			$this->load->view('v_pelayanan_koperasi',$x);
			$this->load->view('v_footer');	
		}

		function perdagangan(){
			$y['title'] = "Dinas UKM dan Perdagangan";
                        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
			$x['perdagangan'] = $this->m_tulisan->get_tulisan_by_kategori(11);
                        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
			$this->load->view('v_header',$y);
			$this->load->view('v_pelayanan_perdagangan',$x);
			$this->load->view('v_footer');	
		}

		function Metrologi(){
			$y['title'] = "Dinas UKM dan Perdagangan";
			$x['metrologi'] = $this->m_tulisan->get_tulisan_by_kategori(12);
			$x['metrologi1'] = $this->m_tulisan->get_tulisan_by_kategori(13);
			$this->load->view('v_header',$y);
			$this->load->view('v_pelayanan_metrologi',$x);
			$this->load->view('v_footer');	
		}

		function pejabat(){
			$y['title'] = "Dinas UKM dan Perdagangan";
                        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
                        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
			$x['pejabat'] = $this->m_tulisan->get_tulisan_by_kategori(9);
			$this->load->view('v_header',$y);
			$this->load->view('v_pejabat_dinas',$x);
			$this->load->view('v_footer');	
		}

		

	}
?>