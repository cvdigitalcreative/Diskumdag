<?php
	class Home extends CI_Controller{
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
			$y['title'] = "Dinas UKM dan Perdagangan";
			$x['slider'] = $this->m_tulisan->get_tulisan_by_kategori(2);
			$x['pengumuman'] = $this->m_pengumuman->get_all_pengumuman_by_tanggal();
			$x['berita'] = $this->m_tulisan->get_tulisan_by_kategori(4);
			$this->load->view('v_header',$y);
			$this->load->view('v_home',$x);
			$this->load->view('v_social_media');
			$this->load->view('v_footer');
			
		}

		function pengumuman(){
			$y['title'] = "Dina UKM dan Perdagangan-Pengumuman";
			$x['pengumuman'] = $this->m_pengumuman->get_all_pengumuman();
			$this->load->view('v_header',$y);
			$this->load->view('v_pengumuman',$x);
			$this->load->view('v_footer');
		}

				

	}
?>