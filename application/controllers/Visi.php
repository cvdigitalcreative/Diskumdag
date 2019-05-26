<?php
	class Visi extends CI_Controller{
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
			$x['visi'] = $this->m_tulisan->get_tulisan_by_kategori(6);
			$this->load->view('v_header',$y);
			$this->load->view('v_visi',$x);
			$this->load->view('v_footer');	
		}

		function struktur(){
			$y['title'] = "Dinas UKM dan Perdagangan";
			$x['struktur'] = $this->m_tulisan->get_tulisan_by_kategori(7);
			$this->load->view('v_header',$y);
			$this->load->view('v_struktur',$x);
			$this->load->view('v_footer');	
		}

		function tugas(){
			$y['title'] = "Dinas UKM dan Perdagangan";
			$x['tugas'] = $this->m_tulisan->get_tulisan_by_kategori(8);
			$this->load->view('v_header',$y);
			$this->load->view('v_tugas',$x);
			$this->load->view('v_footer');	
		}

		function pejabat(){
			$y['title'] = "Dinas UKM dan Perdagangan";
			$x['pejabat'] = $this->m_tulisan->get_tulisan_by_kategori(9);
			$this->load->view('v_header',$y);
			$this->load->view('v_pejabat_dinas',$x);
			$this->load->view('v_footer');	
		}

		

	}
?>