<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_url');
	}

	function index(){
		
		if($this->session->userdata('username') != ''){
			$data['judul']       = "Admin Siakad Poligon";
			$data['url']         = $this->m_url->get('t_url', ['id_head_menu' => 0]);
			$data['head_menu']   = $this->m_url->get_limit();
			$i = 1;
			foreach($data['head_menu'] as $d) {
				$data['url_head'][$i]   = $this->m_url->get('t_url', ['id_head_menu' => $d->id_head_menu]);
				$i++;
			}
			// print_r($data['url_head']); die;
			$data['level_short'] = $this->m_url->select_max();

			$this->load->view('home/templates/v_header', $data);
			$this->load->view('v_url', $data);
			$this->load->view('home/templates/v_footer');
		} else {
			redirect('login');
		}
	}

	// function tes($id){
	// 	$data['tes'] = $this->m_url->get('t_url', ['id_head_menu' => $id]);
	// }

	function insert(){
		$id            = $this->input->post('id');
		$url           = $this->input->post('url');
		$deskripsi_url = $this->input->post('deskripsi_url');
		$nama_view     = $this->input->post('nama_view');
		$level_short   = $this->input->post('level_short');

		$data = [

			'url'           => $url,
			'deskripsi_url' => $deskripsi_url,
			'nama_view'     => $nama_view,
			'level_short'   => $level_short

		];

		if($id == ''){
			$data['id_url'] = auto_inc('id_url', 't_url');
		}

		$res = $this->m_url->insert($data);

		if($res > 0){
			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
  			Berhasil menambah data!</div>');
  			redirect('home/url');
			// echo "
			// 	<script>
			// 		alert('Data Berhasil Ditambahkan!');
			// 		document.location.href = '". base_url() ."home/url';
			// 	</script>";
			//redirect('home/url');
		} else {
			$this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
  			Gagal menambah data!</div>');
  			redirect('home');
		}
		
	}

	function update(){
		$data = ['id_head_menu' => $this->input->post('id')];
		$id_url = $this->input->post('id_url');

		$res = $this->m_url->update('t_url', $data, ['id_url' => $id_url]);
		if($res > 0){
			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
  			Berhasil!</div>');
  			redirect('home/url');
		}
	}

}