<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privilege extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_privilege');
	}

	public function index(){
		
		if($this->session->userdata('username') != ''){
			$data['judul'] = "Admin Siakad Poligon";
			$data['privilege'] = $this->m_privilege->getData('t_privilege');

			$this->load->view('home/templates/v_header', $data);
			$this->load->view('v_privilege', $data);
			$this->load->view('home/templates/v_footer');
		} else {
			redirect('login');
		}
	}
}