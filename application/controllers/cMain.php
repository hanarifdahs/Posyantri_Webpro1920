<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cMain extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->library('session');
        $this->load->model('mUser');
    }
    
	public function index()
	{
		$this->load->view('public/main');
    }
    
    public function showLogin()
    {
        $this->load->view('public/login');
    }

    public function actionLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $dataLogin = $this->mUser->cekLogin($username,$password);
        $role = $this->mUser->cekRole($dataLogin->result_array()[0]['role_id']);

        if ($dataLogin->num_rows() > 0) {
            $dataSession = array(
				'username' => $username,
				'role' => $role
				);
            $this->session->set_userdata($dataSession);
            if ($role == 'pasien') {
                //redirect controller pasien
                //redirect('cPasien'); 
                $this->session->set_flashdata('flash', $role.' telah login');
                redirect('cMain/index');
            }
            else if ($role == 'kader'){
                //redirect controller kader
                //redirect('cKader');
                $this->session->set_flashdata('flash', $role.' telah login');
                redirect('cMain/index');
            }
            else if ($role == 'pengurus'){
                //redirect controller pengurus
                //redirect('cPengurus');
                $this->session->set_flashdata('flash', $role.' telah login');
                redirect('cMain/index');
            }
        }
        else{
            $this->session->set_flashdata('flash', 'Username/Password Salah');
            redirect('cMain/showLogin');
        }
    }
}
