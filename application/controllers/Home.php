<?php
	class Home extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_galeri');
			$this->load->model('m_tulisan');
			$this->load->model('m_pengunjung');
			$this->load->model('m_tentang');
			$this->m_pengunjung->count_visitor();
		}

		function index(){
			$y['title'] = "Warung Kreatif";
			$x['header'] = $this->m_galeri->get_galeri_by_album_id(4);
			$x['layanan'] = $this->m_galeri->get_galeri_by_album_id(5);
			$x['foto_layanan'] = $this->m_galeri->get_galeri_by_album_id(6);
			$x['alkena'] = $this->m_galeri->get_galeri_by_album_id_withlimit(12,4);
			$x['photoproduk'] = $this->m_galeri->get_galeri_by_album_id_withlimit(10,3);
			$x['branding'] = $this->m_galeri->get_galeri_by_album_id_withlimit(11,3);
			$x['multimedia'] = $this->m_galeri->get_galeri_by_album_id_withlimit(9,5);
			$x['aplikasimobile'] = $this->m_galeri->get_galeri_by_album_id_withlimit(7,3);
			$x['website'] = $this->m_galeri->get_galeri_by_album_id_withlimit(8,3);
			$x['portofolio_multimedia'] = $this->m_tulisan->get_tulisan_by_kategori(27);
			$x['portofolio_website'] = $this->m_tulisan->get_tulisan_by_kategori(28);
			$x['portofolio_mobile'] = $this->m_tulisan->get_tulisan_by_kategori(29);
			$z['footer'] = $this->m_tentang->get_tentang_by_kategori(4);
			$this->load->view('v_header',$y);
			$this->load->view('v_home',$x);
			$this->load->view('v_footer',$z);
		}

		function detail($slug){			
			$data=$this->m_tulisan->get_berita_by_slug($slug);
			$q=$data->row_array();
			$kode=$q['tulisan_album_id'];
			$title=$q['tulisan_judul'];
			$x['deskripsi']=$this->m_tulisan->get_berita_by_slug($slug);
			$x['gambar']=$this->m_galeri->get_galeri_by_album_id($kode);
			$x['portofolio_multimedia'] = $this->m_tulisan->get_tulisan_by_kategori_limit(27,3);
			$x['portofolio_website'] = $this->m_tulisan->get_tulisan_by_kategori_limit(28,3);
			$x['portofolio_mobile'] = $this->m_tulisan->get_tulisan_by_kategori_limit(29,3);
			$x['title'] = $title;
			$z['footer'] = $this->m_tentang->get_tentang_by_kategori(4);
			$this->load->view('v_detail_portofolio',$x);
			$this->load->view('v_footer',$z);
		}
	}
?>