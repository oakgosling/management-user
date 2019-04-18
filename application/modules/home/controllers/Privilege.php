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

	public function insert() {
		$id        = $this->input->post('id');
		$privilege = $this->input->post('privilege');
		$edit      = $this->input->post('edit');
		$delete    = $this->input->post('delete');
		$view      = $this->input->post('view');
		$insert    = $this->input->post('insert');
		
		$data = [
			'privilege' => $privilege,
			'edit'      => $edit,
			'delete'    => $delete,
			'view'      => $view,
			'insert'    => $insert
		];
		if ($id == '') {
			$data['id_privilege'] = auto_inc('id_privilege', 't_privilege');
			$this->m_privilege->add_privilege($data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
  			Berhasil menambah data!</div>');
  			redirect('home/privilege');
		} else {
			$this->m_privilege->update_privilege('t_privilege', $data, ['id_privilege' => $id]);
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
  			Berhasil mengubah data!</div>');
  			redirect('home/privilege');
		}
		if ($data['level'] == NULL) redirect('home/level','refresh');
	}

	public function delete($id) {
		$this->m_privilege->delete_privilege('t_privilege', ['id_privilege' => $id]);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert">
  			Berhasil menghapus data!</div>');
  			redirect('home/privilege');
	}
}