<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('m_galeri');
    }


    function ukm()
    {
        $y['title'] = 'Berita UKM';
        $x['info'] = $this->m_galeri->get_galeri_by_album_id(2);
        $this->load->view('v_header', $y);
        $this->load->view('v_ukm', $x);
        $this->load->view('v_footer');
        
    }
}
