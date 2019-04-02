<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('m_home');
        //$this->load->model('pagination_model');
    } 

	public function index()
	{
		if($this->session->userdata('username') != ''){
			$data['judul'] = "Admin Siakad Poligon";
			$data['level'] = $this->m_home->getData('t_level');
			$data['user']  = $this->m_home->get_data_user();

			// pagination
			$jumlah_data          = $this->m_home->jumlah_data('v_list_biodata');
			$config['base_url']   = base_url() . 'home/index/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page']   = 5;
			$choice               = $config['total_rows'] / $config['per_page'];
			$config['num_links']  = floor($choice);

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
			$data['page']		  = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['list_biodata'] = $this->m_home->list_biodata($data['page'], $config['per_page']);
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
			echo "
				<script>
					alert('Data Berhasil Ditambahkan!');
					document.location.href = 'home';
				</script>";
		} else {
			echo "
				<script>
					alert('Data Gagal Ditambahkan!');
					document.location.href = 'home';
				</script>";
		}
	}

	// deleting data
	public function delete_user($kd_user) {

		$query = $this->m_home->delete_user($kd_user);
		if($query > 0) {
			return redirect('home');
		}
	}

	public function aktif_user($kd_user) {

		$query = $this->m_home->aktif_user($kd_user);
		if($query > 0){
			return redirect('home');
		}
	}

	public function nonaktif_user($kd_user) {

		$query = $this->m_home->nonaktif_user($kd_user);
		if($query >= 0){
			return redirect('home');
		}
	}

}
