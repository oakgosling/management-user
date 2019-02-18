<?php
class Login extends MX_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

	public function index()
    {
        if (!$this->session->userdata('security'))
        {
            $this->load->view('v_index');
        } else {
            redirect('home','refresh');
        }
    }
 
    public function ckl()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($cekLogin = $this->m_login->clgn($username, $password))
        {
            if ($cekLogin->lv == '0')
            {
                $this->session->set_userdata('security',$cekLogin);
                redirect('home','refresh');
            }
            elseif(!$cekLogin->lv == '0')
            {
                $this->session->set_flashdata('belum_aktif', '<div >maaf username dan password belum aktif</div>');
                redirect('');
            }
        } else {
            $this->session->set_flashdata('error', '<div >maaf username dan password anda salah</div>');
            redirect('');     
        }
    }
        
    public function cklg()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
