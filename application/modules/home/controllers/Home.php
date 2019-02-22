<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('home/m_home');
        if (!$this->session->userdata('security')){
            $this->session->set_flashdata('gagal','Maaf Anda Belum Login');
            redirect('login');
        }
        $this->id = $this->session->userdata('security')->id_cession;
        $this->lv = $this->session->userdata('security')->lv;
    } 

	public function index()
	{
		$data['judul'] = "ADMIN POLITEKNIK GORONTALO";
		$data['l'] = $this->m_home->ulv($this->lv);
		$data['lvl'] = $this->m_home->getData('t_level');
		$data['usr'] = $this->m_home->dftUsr();
		$data['list_biodata'] = $this->m_home->list_biodata();

		$this->load->view('templates/v_header', $data);
		$this->load->view('v_index', $data);
		$this->load->view('templates/v_footer', $data);
	}
	public function daftar(){
		$data['kd_user'] = $this->input->post('kd');
		$data['user'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		$data['id_level'] = $this->input->post('lv');
				
		$this->m_home->daftar($data);
		redirect('home');
	}

	public function dlt($id){
		$this->m_home->dlt('t_user','kd_user',$id);
		redirect();
	}
}
