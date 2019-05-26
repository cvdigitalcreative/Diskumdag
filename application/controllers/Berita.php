<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_galeri');
        $this->load->model('m_album');
        $this->load->model('m_berita');
        
    }

    function index()
    {
        $y['title'] = 'Berita';
        $x['info'] = $this->m_galeri->get_galeri_home();

        $this->load->view('v_header', $y);
        $this->load->view('v_berita1', $x);
        $this->load->view('v_footer');
        
    }


    function ukm()
    {
        $y['title'] = 'Berita UKM';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(2);
        $x['tanggal'] = $this->m_album->get_album_by_kode(2);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
        
    }
    function koperasi()
    {
        $y['title'] = 'Berita Koperasi';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(3);
        $x['tanggal'] = $this->m_album->get_album_by_kode(3);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
        
    }
    function perdagangan()
    {
        $y['title'] = 'Berita perdagangan';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(4);
        $x['tanggal'] = $this->m_album->get_album_by_kode(4);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
        
    }

    function pk()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(5);
        $x['tanggal'] = $this->m_album->get_album_by_kode(5);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
        
    }

    function upm()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(6);
        $x['tanggal'] = $this->m_album->get_album_by_kode(6);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
        
    }
    function kukmp()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(7);
        $x['tanggal'] = $this->m_album->get_album_by_kode(7);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
        
    }

    function ppukmp()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(8);
        $x['tanggal'] = $this->m_album->get_album_by_kode(8);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
        
    }
  

    function detail()
    {
        $y['title'] = "Dinas UKM dan Perdagangan-Pengumuan";
        $slug = $this->uri->segment(3);	   
        $link=$this->uri->segment(4);
        $x['data'] = $this->m_berita->get_join_table($slug);
        $x['link_before']=$this->m_berita->get_link_before($link);
        $x['link_after']=$this->m_berita->get_link_after($link);
        $this->load->view('v_header',$y);
        $this->load->view('v_detail_pengumuman',$x);
        $this->load->view('v_footer');

    }
}
