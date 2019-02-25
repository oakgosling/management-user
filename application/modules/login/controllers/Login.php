<?php
class Login extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
    {
        $this->load->view('v_index');
    }

    public function cek_login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        if ($user == 'admin' && $pass == 'admin') {
            $this->session->set_userdata('username', $user);
            redirect('home');
        } else {
            redirect('login');
        }  
    }
        
    public function logout()
    {
        //$this->session->sess_destroy();
        $this->session->unset_userdata(array('username' => ''));
        redirect('login');
    }
}
