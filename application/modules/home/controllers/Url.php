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
			//$data['url_head1']   = $this->m_url->get('t_url', ['id_head_menu' => 2]);
			//$data['url_head2']   = $this->m_url->get('t_url', ['id_head_menu' => 3]);
			//$data['url_head3']   = $this->m_url->get('t_url', ['id_head_menu' => 4]);
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
			echo "
				<script>
					alert('Data Berhasil Ditambahkan!');
					document.location.href = '". base_url() ."home/url';
				</script>";
			//redirect('home/url');
		} else {
			echo "
				<script>
					alert('Data Gagal Ditambahkan!');
					document.location.href = '". base_url() ."home/url';
				</script>";
		}
		
	}

	function update(){
		$data = ['id_head_menu' => $this->input->post('id')];
		$id_url = $this->input->post('id_url');

		$res = $this->m_url->update('t_url', $data, ['id_url' => $id_url]);
		if($res > 0){
			redirect('home/url','refresh');
		}
	}

}