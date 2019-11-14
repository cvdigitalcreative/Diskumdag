<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_galeri');
        $this->load->model('m_album');
        $this->load->model('m_tulisan');
    }

    function index()
    {
        $y['title'] = 'Berita';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['info'] = $this->m_tulisan->get_post_home();
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita1', $x);
        $this->load->view('v_footer');
    }


    function ukm()
    {
        $y['title'] = 'Berita UKM';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['info'] = $this->m_tulisan->get_tulisan_by_kategori(14);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
    }
    function koperasi()
    {
        $y['title'] = 'Berita Koperasi';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['info'] = $this->m_tulisan->get_tulisan_by_kategori(15);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
    }
    function perdagangan()
    {
        $y['title'] = 'Berita perdagangan';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['info'] = $this->m_tulisan->get_tulisan_by_kategori(16);
        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
    }

    function pk()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_tulisan->get_tulisan_by_kategori(17);

        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
    }

    function upm()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_tulisan->get_tulisan_by_kategori(18);

        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
    }
    function kukmp()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_tulisan->get_tulisan_by_kategori(19);

        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
    }

    function ppukmp()
    {
        $y['title'] = 'Berita Wasdal PK';
        $x['info'] = $this->m_tulisan->get_tulisan_by_kategori(20);

        $this->load->view('v_header', $y);
        $this->load->view('v_berita', $x);
        $this->load->view('v_footer');
    }


    function detail($slug)
    {
        $y['title'] = 'Dinas Koperasi';
        $y['running_text'] = $this->m_tulisan->get_tulisan_by_kategori(12);
        $x['info'] = $this->m_tulisan->get_berita_by_slug($slug);
        $y['header'] = $this->m_tulisan->get_tulisan_by_kategori(22);
        $this->load->view('v_header', $y);
        $this->load->view('v_judul', $x);
        $this->load->view('v_footer');
    }
}
