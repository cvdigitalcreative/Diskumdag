<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
function index()
    {
        $y['title']='Download';

        $this->load->view('v_header',$y);
        $this->load->view('v_download');
        $this->load->view('v_footer');	
    }
}
