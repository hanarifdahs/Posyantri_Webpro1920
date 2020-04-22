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
        $this->load->view('public/header');
        $this->load->view('public/main');
        $this->load->view('public/footer');
    }
    
    public function showLogin()
    {
        $this->load->view('public/login');
    }

    public function actionLogin()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cekLogin = $this->mUser->cekLogin($username,$password);
        
        if ($cekLogin->num_rows() > 0) {
            $dataLogin = $cekLogin->result_array();
            $role = $this->mUser->cekRole($dataLogin[0]['role_id']);
            
            $dataSession = array(
                'id' => $dataLogin[0]['id'],
				'username' => $username,
                'role' => $role,
                'is_active' => true
				);
            $this->session->set_userdata($dataSession);
            if ($role == 'pasien') {
                //redirect controller pasien
                $this->session->set_flashdata('flash', $role.$this->session->id.' telah login');
                redirect('cPasien'); 
            }
            else if ($role == 'kader'){
                $this->session->set_flashdata('flash', $role.$this->session->id.' telah login');
                //redirect('cKader');
                //placeholder, belum ada controller kader
                $this->load->view('public/header');
                $this->load->view('public/main');
                $this->load->view('public/footer');
            }
            else if ($role == 'pengurus'){
                $this->session->set_flashdata('flash', $role.$this->session->id.' telah login');
                //redirect('cPengurus');
                //placeholder, belum ada controller pengurus
                $this->load->view('public/header');
                $this->load->view('public/main');
                $this->load->view('public/footer');
            }
        }
        else{
            $this->session->set_flashdata('flash', 'Username/Password Salah');
            redirect('cMain/showLogin');
        }
    }
}
