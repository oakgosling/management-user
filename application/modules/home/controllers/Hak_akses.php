<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hak_akses extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_hak_akses');
	}

	public function index(){
		
		if($this->session->userdata('username') != ''){
			$data['judul']          = "Admin Siakad Poligon";
			$data['list_level']     = $this->m_hak_akses->getData('t_level');
			$data['list_url']       = $this->m_hak_akses->getData('t_url');
			$data['list_privilege'] = $this->m_hak_akses->getData('t_privilege');

			$this->load->view('home/templates/v_header', $data);
			$this->load->view('v_hak_akses', $data);
			$this->load->view('home/templates/v_footer');
		} else {
			redirect('login');
		}	
	}

	public function insert(){
		$level     = $this->input->post('level');
		$url       = $this->input->post('url');
		$privilege = $this->input->post('privilege');

		$data = [
			'id_url'       => $url,
			'id_level'     => $level,
			'id_privilege' => $privilege
		];

		$this->m_hak_akses->insertHakAkses('t_hak_akses', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
  			Berhasil menambah hak akses baru!</div>');
  			redirect('home/hak_akses');
	}
}