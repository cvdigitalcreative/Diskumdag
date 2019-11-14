<?php
class Inbox extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('m_kontak');
                $this->load->model('m_inbox');
	}

	function index(){
		$this->m_kontak->update_status_kontak();
		$x['data']=$this->m_kontak->get_all_inbox();
                $x['edit_inbox']=$this->m_inbox->get_all_inbox_all();
		$y['title'] = 'WK ~ Inbox';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_inbox',$x);
	}

	function hapus_inbox(){
		$kode=$this->input->post('kode');
		$this->m_kontak->hapus_kontak($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Inbox');
	}
}