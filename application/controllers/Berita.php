<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_galeri');
        $this->load->model('m_album');
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
}
