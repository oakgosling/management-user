<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_level');
	}

	public function index(){
		
		if($this->session->userdata('username') != ''){
			$data['judul'] = "Admin Siakad Poligon";
			$data['level'] = $this->m_level->getData('t_level');

			$this->load->view('home/templates/v_header', $data);
			$this->load->view('v_level', $data);
			$this->load->view('home/templates/v_footer');
		} else {
			redirect('login');
		}
	}
}