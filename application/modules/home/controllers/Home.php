<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // $this->load->model('m_home');
        if (!$this->session->userdata('security')){
            $this->session->set_flashdata('gagal','Maaf Anda Belum Login');
            redirect('login');
        }
        $this->id = $this->session->userdata('security')->id_cession;
        $this->lv = $this->session->userdata('security')->lv;
    } 

	public function index()
	{
		$b['l'] = $this->m_home->ulv($this->lv);
		$b['lvl'] = $this->m_home->getData('t_level');
		$b['usr'] = $this->m_home->dftUsr();
		$b['nUsr'] = $this->m_home->nDataUsr();
		$this->load->view('v_index',$b);
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
