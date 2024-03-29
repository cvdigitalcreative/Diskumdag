<?php
class Pengumuman extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('Administrator');
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_tulisan');
		$this->load->model('m_pengguna');
		$this->load->model('m_album');
		$this->load->model('m_pengumuman');
		$this->load->library('upload');

	}

	function slug($str){
		$str = strtolower(trim($str));
		$str = preg_replace('/[^a-z0-9-)]/', "-", $str);
		$str = preg_replace('/-+/', "-", $str);
		return $str;
	}
	function index(){
		$x['data']=$this->m_pengumuman->get_all_pengumuman();
		$y['title'] = 'Dinas UKM dan Perdagangan ~ Tulisan';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_pengumuman',$x);
	}
	function add_tulisan(){
		$x['album']=$this->m_album->get_all_album();
		$x['kat']=$this->m_kategori->get_all_kategori();
		$y['title'] = 'Dinas UKM dan Perdagangan ~ Tulisan';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_add_pengumuman',$x);
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['album']=$this->m_album->get_all_album();
		$x['data']=$this->m_pengumuman->get_tulisan_by_kode($kode);
		$x['kat']=$this->m_kategori->get_all_kategori();
		$y['title'] = 'Dinas UKM dan Perdagangan ~ Tulisan';
		$this->load->view('admin/v_header',$y);
		$this->load->view('admin/v_sidebar',["side" => 2]);
		$this->load->view('admin/v_edit_pengumuman',$x);
	}
	function simpan_tulisan(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	            $config['max_size'] = 0; //type yang dapat diakses bisa anda sesuaikan
	            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto1']['name'])||!empty($_FILES['filefoto2']['name']))
	            {
	                if ($this->upload->do_upload('filefoto1'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '80%';
	                        $config['max_size'] = 4000;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$filter=str_replace("?", "", $judul);
							$filter2=str_replace("$", "", $filter);
							$filter3=str_replace("(", "", $filter2);
							$filter4=str_replace(")", "", $filter3);
							$filter5=str_replace(".", "", $filter4);
							$filter6=str_replace(",", "", $filter5);
							$filter7=str_replace("/", "", $filter6);
							$filter8=str_replace("|", "", $filter7);
							$filter9=str_replace(" ", "", $filter8);
							$slug=strtolower(str_replace("", "-", $filter9));
							$isi=$this->input->post('xisi');
							$tanggal = $this->input->post('tanggal');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_pengumuman->simpan_pengumuman($tanggal,$judul,$isi,$user_id,$user_nama,$gambar,$slug);
							echo $this->session->set_flashdata('msg','success');
							redirect('Admin/Pengumuman');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('Admin/Pengumuman');
	                }
	                 
	            }else{
							$judul=strip_tags($this->input->post('xjudul'));
							$filter=str_replace("?", "", $judul);
							$filter2=str_replace("$", "", $filter);
							$filter3=str_replace("(", "", $filter2);
							$filter4=str_replace(")", "", $filter3);
							$filter5=str_replace(".", "", $filter4);
							$filter6=str_replace(",", "", $filter5);
							$filter7=str_replace("/", "", $filter6);
							$filter8=str_replace("|", "", $filter7);
							$filter9=str_replace(" ", "", $filter8);
							$slug=strtolower(str_replace("", "-", $filter9));
							$tanggal = $this->input->post('tanggal');
							$isi=$this->input->post('xisi');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_pengumuman->simpan_pengumuman_tanpa_gambar($tanggal,$judul,$isi,$user_id,$user_nama,$slug);
							echo $this->session->set_flashdata('msg','success');
							redirect('Admin/Pengumuman');
				}
				
	}
	
	function update_tulisan(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	            $config['max_size'] = 0; //type yang dapat diakses bisa anda sesuaikan
	            // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto1']['name']))
	            {
	                if ($this->upload->do_upload('filefoto1')||$this->upload->do_upload('filefoto2'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '100%';
	                        // $config['width']= 560;
	                        // $config['height']= 510;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $tulisan_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
	                        $filter=str_replace("?", "", $judul);
							$filter2=str_replace("$", "", $filter);
							$filter3=str_replace("(", "", $filter2);
							$filter4=str_replace(")", "", $filter3);
							$filter5=str_replace(".", "", $filter4);
							$filter6=str_replace(",", "", $filter5);
							$filter7=str_replace("/", "", $filter6);
							$filter8=str_replace("|", "", $filter7);
							$filter9=str_replace(" ", "", $filter8);
							$slug=strtolower(str_replace("", "-", $filter9));
							$tanggal = $this->input->post('tanggal');
							$isi=$this->input->post('xisi');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_pengumuman->update_tulisan($tulisan_id,$tanggal,$judul,$isi,$user_id,$user_nama,$gambar,$slug);
							echo $this->session->set_flashdata('msg','info');

							redirect('Admin/Pengumuman');                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('Admin/Pengumuman');
	                }
	                
	            }else{
							$tulisan_id=$this->input->post('kode');
							$judul=strip_tags($this->input->post('xjudul'));
							$filter=str_replace("?", "", $judul);
							$filter2=str_replace("$", "", $filter);
							$filter3=str_replace("(", "", $filter2);
							$filter4=str_replace(")", "", $filter3);
							$filter5=str_replace(".", "", $filter4);
							$filter6=str_replace(",", "", $filter5);
							$filter7=str_replace("/", "", $filter6);
							$filter8=str_replace("|", "", $filter7);
							$filter9=str_replace(" ", "", $filter8);
							$slug=strtolower(str_replace("", "-", $filter9));
							$tanggal = $this->input->post('tanggal');
							$isi=$this->input->post('xisi');
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_pengumuman->update_tulisan_tanpa_img($tulisan_id,$tanggal,$judul,$isi,$user_id,$user_nama,$slug);
							echo $this->session->set_flashdata('msg','info');
							redirect('Admin/Pengumuman');
	            } 

	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_pengumuman->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('Admin/Pengumuman');
	}

}