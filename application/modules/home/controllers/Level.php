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

	public function add_level() {
		$id    = $this->input->post('id_level');
		$level = $this->input->post('level');
		
		$data = ['level' => $level];
		if ($id == '') {
			$data['id_level'] = auto_inc('id_level', 't_level');
			$this->m_level->add_level($data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
  			Berhasil menambah data!</div>');
  			redirect('home/level');
		} else {
			$this->m_level->update_level('t_level', $data, ['id_level' => $id]);
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
  			Berhasil mengubah data!</div>');
  			redirect('home/level');
		}
		if ($data['level'] == NULL) redirect('home/level','refresh');
	}
	public function delete_level($id){
		$res = $this->m_level->delete_level('t_level', ['id_level' => $id]);
		if($res > 0){
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
  			Berhasil menghapus data!</div>');
  			redirect('home/level');
		}
	}

}