<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_url');
	}

	public function index(){
		
		if($this->session->userdata('username') != ''){
			$data['judul'] = "Admin Siakad Poligon";
			$data['url'] = $this->m_url->getData('t_url');

			$this->load->view('home/templates/v_header', $data);
			$this->load->view('v_url', $data);
			$this->load->view('home/templates/v_footer');
		} else {
			redirect('login');
		}
	}
}