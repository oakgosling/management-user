<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('home/m_home');
    } 

	public function index()
	{
		$data['judul'] = "ADMIN POLITEKNIK GORONTALO";
		$data['lvl'] = $this->m_home->getData('t_level');
		$data['list_biodata'] = $this->m_home->list_biodata();

		$this->load->view('templates/v_header', $data);
		$this->load->view('v_index', $data);
		$this->load->view('templates/v_footer', $data);
	}

	// fungsi daftar user
	// public function daftar(){
	// 	$data['kd_user'] = $this->input->post('kd');
	// 	$data['user'] = $this->input->post('email');
	// 	$data['password'] = $this->input->post('password');
	// 	$data['id_level'] = $this->input->post('lv');
				
	// 	$this->m_home->daftar($data);
	// 	redirect('home');
	// }

	// fungsi delete data
	// public function dlt($id){
	// 	$this->m_home->dlt('t_user','kd_user',$id);
	// 	redirect();
	// }
}
