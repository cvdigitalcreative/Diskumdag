<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_galeri');
		$this->load->model('m_pengunjung');
		$this->load->model('m_kontak');
		$this->load->model('m_tentang');
        $this->m_pengunjung->count_visitor();
	}

	public function index()
	{
		$y['title']='Warung Kreatif ~ Tentang';
		$x['header'] = $this->m_galeri->get_galeri_by_album_id_withlimit(13,1);
		$x['team'] = $this->m_tentang->get_tentang_by_kategori(1);
		$x['quote'] = $this->m_tentang->get_tentang_by_kategori(2);
		$x['touch'] = $this->m_tentang->get_tentang_by_kategori(3);
		$z['footer'] = $this->m_tentang->get_tentang_by_kategori(4);
		$this->load->view('v_header',$y);
		$this->load->view('v_about',$x);
		$this->load->view('v_footer',$z);
	}

	function kirim_pesan(){
                $nama=str_replace("'", "", $this->input->post('name',TRUE));
                $email=str_replace("'", "", $this->input->post('email',TRUE));      
                $pesan=str_replace("'", "", $this->input->post('message',TRUE));
                $this->m_kontak->kirim_pesan($nama,$email,$pesan);
                echo $this->session->set_flashdata('msg',' <p>NB: </strong> Terima Kasih Telah Menghubungi Kami.</p>');
                redirect('Tentang');
        }
}
