<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('m_home');
    } 

	public function index()
	{
		if($this->session->userdata('username') != ''){
			$data['judul']        = "Admin Siakad Poligon";
			$data['level']        = $this->m_home->getData('t_level');
			$data['user']         = $this->m_home->get_data_user();

			// pagination for biodata
			$jumlah_data           = $this->m_home->jumlah_data('v_list_biodata');
			$config['base_url']    = base_url() . 'home/index/';
			$config['total_rows']  = $jumlah_data;
			$config['per_page']    = 5;
			$config['uri_segment'] = 3;
			$choice                = $config['total_rows'] / $config['per_page'];
			$config['num_links']   = floor($choice);

			// style pagination with bootstrap
			$config['full_tag_open']   = '<ul class="pagination justify-content-end">';
			$config['full_tag_close']  = '</ul>';
			$config['attributes']      = ['class' => 'page-link'];
			$config['first_link']      = false;
			$config['last_link']       = false;
			$config['first_tag_open']  = '<li class="page-item">';
			$config['first_tag_close'] = '</li>';
			$config['prev_link']       = '&laquo';
			$config['prev_tag_open']   = '<li class="page-item">';
			$config['prev_tag_close']  = '</li>';
			$config['next_link']       = '&raquo';
			$config['next_tag_open']   = '<li class="page-item">';
			$config['next_tag_close']  = '</li>';
			$config['last_tag_open']   = '<li class="page-item">';
			$config['last_tag_close']  = '</li>';
			$config['cur_tag_open']    = '<li style="z-index:0;" class="page-item active"><a href="#" class="page-link">';
			$config['cur_tag_close']   = '<span class="sr-only">(current)</span></a></li>';
			$config['num_tag_open']    = '<li class="page-item">';
			$config['num_tag_close']   = '</li>';
			
			$this->pagination->initialize($config);
			$page                 = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['list_biodata'] = $this->m_home->list_biodata($page, $config['per_page']);
			$data['paging']       = $this->pagination->create_links();

			$this->load->view('templates/v_header', $data);
			$this->load->view('v_index', $data);
			$this->load->view('templates/v_footer', $data);

		} else {
			redirect('login');
		}
	}

	// fungsi daftar user
	public function daftar(){

		$data['kd_user']  = $this->input->post('nik');
		$data['user']     = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['pass']     = $this->input->post('password');
		$data['id_level'] = $this->input->post('lv');
				
		$query = $this->m_home->daftar($data);
		if($query > 0) {
			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
  			Berhasil menambah user!</div>');
  			redirect('home');
		} else {
			$this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
  			Gagal menambah user!</div>');
  			redirect('home');
		}
	}

	// deleting data
	public function delete_user($kd_user) {

		$query = $this->m_home->delete_user($kd_user);
		if($query > 0) {
			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
  			Berhasil menghapus user!</div>');
  			redirect('home');
		}
	}

	public function aktif_user($kd_user) {

		$query = $this->m_home->aktif_user($kd_user);
		if($query > 0){
			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
  			Berhasil mengaktifkan status user!</div>');
  			redirect('home');
		}
	}

	public function nonaktif_user($kd_user) {

		$query = $this->m_home->nonaktif_user($kd_user);
		if($query >= 0){
			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
  			Berhasil menonaktifkan status user!</div>');
  			redirect('home');
		}
	}

}
