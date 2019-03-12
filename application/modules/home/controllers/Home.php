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
			$data['user']         = $this->m_home->get_data_user('t_user');
			$data['list_biodata'] = $this->m_home->list_biodata();

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
	public function delete_user($kd_user)
	{
		$query = $this->m_home->delete_user($kd_user);
		if($query > 0) {
			return redirect('home');
		}
	}

	public function aktif_user($kd_user)
	{
		$query = $this->m_home->aktif_user($kd_user);
		if($query > 0){
			return redirect('home');
		}
	}

	public function nonaktif_user($kd_user)
	{
		$query = $this->m_home->nonaktif_user($kd_user);
		if($query >= 0){
			return redirect('home');
		}
	}

}
