<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    function index()
    { 
        $y['title']='Kontak';

        $this->load->view('v_header',$y);
        $this->load->view('v_kontak');
        
    }
}