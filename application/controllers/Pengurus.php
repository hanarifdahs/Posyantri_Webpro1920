<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kader_model');
        $this->load->model('petugas_model');
        $this->load->model('profile_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function topbar()
    {
        $data['user'] = $this->profile_model->getUserById(($this->session->id));
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->username])->row_array();
        $data['title'] = 'Pengurus';

        $this->load->view('pengurus/header', $data);
        $this->load->view('pengurus/sidebar', $data);
        $this->load->view('pengurus/topbar', $data);
        $this->load->view('pengurus/index', $data);
        $this->load->view('pengurus/footer');
    }

    public function dashboard()
    {
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->id])->row_array();
        $data['title'] = 'Pengurus';
        //$data['user'] = $this->profile_model->getAllData();

        $this->load->view('pengurus/header', $data);
        $this->load->view('pengurus/sidebar', $data);
        $this->load->view('pengurus/topbar', $data);
        $this->load->view('pengurus/dashboard', $data);
        $this->load->view('pengurus/footer');
    }

    public function kader()
    {
        //$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'kader';
        $data['user'] = $this->kader_model->getAllKader();
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->load->view('pengurus/header', $data);
        $this->load->view('pengurus/sidebar', $data);
        $this->load->view('pengurus/topbar', $data_topbar);
        $this->load->view('pengurus/kader', $data);
        $this->load->view('pengurus/footer');
        $this->load->model('kader_model');
    }
    public function p_kesehatan()
    {
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));
        $data['title'] = 'Petugas Kesehatan';
        $data['user'] = $this->petugas_model->getAllPetugas();

        $this->load->view('pengurus/header', $data);
        $this->load->view('pengurus/sidebar', $data);
        $this->load->view('pengurus/topbar', $data_topbar);
        $this->load->view('pengurus/p_kesehatan', $data);
        $this->load->view('pengurus/footer');
        $this->load->model('petugas_model');
    }

    public function tambah_kader()
    {
        $data['title'] = 'Tambah Data Kader';
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('pengurus/header', $data);
            $this->load->view('pengurus/sidebar', $data);
            $this->load->view('pengurus/topbar', $data_topbar);
            $this->load->view('pengurus/tambah_kader', $data);
            $this->load->view('pengurus/footer');
        } else {
            $this->kader_model->tambahDatakader();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengurus/kader');
        }
    }

    public function hapuskader($id)
    {
        $this->kader_model->hapusDataKader($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengurus/kader');
    }

    public function detailkader($id)
    {
        $data['title'] = 'Detail Data kader';
        $data['user'] = $this->kader_model->getKaderbyId($id);
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->load->view('pengurus/header', $data);
        $this->load->view('pengurus/sidebar', $data);
        $this->load->view('pengurus/topbar', $data_topbar);
        $this->load->view('pengurus/detailkader', $data);
        $this->load->view('pengurus/footer');
    }

    public function updatekader($id)
    {
        $data['title'] = 'update Data Kader';
        $data['user'] = $this->kader_model->getKaderbyId($id);
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('pengurus/header', $data);
            $this->load->view('pengurus/sidebar', $data);
            $this->load->view('pengurus/topbar', $data_topbar);
            $this->load->view('pengurus/updatekader', $data);
            $this->load->view('pengurus/footer');
        } else {
            $this->kader_model->updateDatakader();
            $this->session->set_flashdata('flash', 'diupdate');
            redirect('pengurus/kader');
        }
    }

    public function tambah_petugas()
    {
        $data['title'] = 'Tambah Data petugas';
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('pengurus/header', $data);
            $this->load->view('pengurus/sidebar', $data);
            $this->load->view('pengurus/topbar', $data_topbar);
            $this->load->view('pengurus/tambah_petugas', $data);
            $this->load->view('pengurus/footer');
        } else {
            $this->petugas_model->tambahDataPetugas();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('pengurus/p_kesehatan');
        }
    }

    public function hapuspetugas($id)
    {
        $this->petugas_model->hapusDataPetugas($id);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('pengurus/p_kesehatan');
    }

    public function updatepetugas($id)
    {
        $data['title'] = 'update Data Kader';
        $data['user'] = $this->petugas_model->getPetugasbyId($id);
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('pengurus/header', $data);
            $this->load->view('pengurus/sidebar', $data);
            $this->load->view('pengurus/topbar', $data_topbar);
            $this->load->view('pengurus/updatepetugas', $data);
            $this->load->view('pengurus/footer');
        } else {
            $this->petugas_model->updateDataPetugas();
            $this->session->set_flashdata('flash', 'diupdate');
            redirect('pengurus/p_kesehatan');
        }
    }

    public function detailpetugas($id)
    {
        $data['title'] = 'Detail Data kader';
        $data['user'] = $this->petugas_model->getPetugasbyId($id);
        $data_topbar['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->load->view('pengurus/header', $data);
        $this->load->view('pengurus/sidebar', $data);
        $this->load->view('pengurus/topbar', $data_topbar);
        $this->load->view('pengurus/detailpetugas', $data);
        $this->load->view('pengurus/footer');
    }

    public function editprofile()
    {
        $data['title'] = 'edit profile';
        $data['user'] = $this->profile_model->getUserById(($this->session->id));

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('pengurus/header', $data);
            $this->load->view('pengurus/sidebar', $data);
            $this->load->view('pengurus/topbar', $data);
            $this->load->view('pengurus/editprofile', $data);
            $this->load->view('pengurus/footer');
        } else {
            $this->profile_model->updateProfile();
            $this->session->set_flashdata('flash', 'diupdate');
            redirect('pengurus/dashboard');
        }
    }

    public function logout()
    {
        $this->cekSession();
        $this->session->set_userdata('is_active', false);
        $this->session->set_flashdata('flash', 'Berhasil Logout');
        redirect('Main');
    }

    public function cekSession()
    {
        if (!$this->session->is_active) {
            $this->session->set_flashdata('flash', 'Sesi berakhir');
            redirect('Main');
            exit;
        }
    }
}
