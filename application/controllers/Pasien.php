<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPasien');
        $this->load->model('mBooking');
        $this->load->model('mJadwal');
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $this->cekSession();
        $current['aktif'] = 'main';
        $this->load->view('pasien/header', $current);
        $this->load->view('pasien/main');
        $this->load->view('pasien/footer');
    }

    public function cekSession()
    {
        if (!$this->session->is_active) {
            $this->session->set_flashdata('flash', 'Sesi berakhir');
            redirect('Main');
            exit;
        }
    }

    public function logout()
    {
        $this->cekSession();
        $this->session->set_userdata('is_active', false);
        $this->session->set_flashdata('flash', 'Berhasil Logout');
        redirect('Main');
    }

    public function Jadwal()
    {
        $data['jadwal'] = $this->mJadwal->getAllJadwalJoin();
        $current['aktif'] = 'jadwal';
        $this->load->view('pasien/header', $current);
        $this->load->view('pasien/jadwal', $data);
        $this->load->view('pasien/footer');
    }

    /*public function pilihJadwal(){
        $id_jadwal = $this->input->post('id_jadwal');
        $data['jadwal'] = $this->mJadwal->getJadwalByIdJoin($id_jadwal)[0];
        $this->load->view('pasien/header');
        $this->load->view('pasien/konfirmasiJadwal', $data);
        $this->load->view('pasien/footer');
    }*/

    public function Booking()
    {
        $id_pasien = $this->mPasien->getPasienByUser($this->session->id)['id_pasien'];
        $data['antrian'] = $this->mBooking->getBookingByPasien_JoinJadwalKategori($id_pasien);
        $current['aktif'] = 'booking';
        $this->load->view('pasien/header', $current);
        $this->load->view('pasien/antrian', $data);
        $this->load->view('pasien/footer');
    }

    public function actionBooking()
    {
        $this->cekSession();
        $id_jadwal = $this->input->post('id_jadwal');
        $id_pasien = $this->mPasien->getPasienByUser($this->session->id)['id_pasien'];
        $id = $this->mBooking->insertBooking($id_jadwal, $id_pasien);
        $this->session->set_flashdata('flash', 'Berhasil Booking Antrian dengan ID = ' . $id);

        $data['jadwal'] = $this->mJadwal->getAllJadwalJoin();
        $current['aktif'] = 'jadwal';
        $this->load->view('pasien/header', $current);
        $this->load->view('pasien/jadwal', $data);
        $this->load->view('pasien/footer');
    }

    public function Account()
    {
        $data['biodata'] = $this->mPasien->getPasienByUser($this->session->id);
        $data['user'] = $this->mPasien->getUserById(($this->session->id));
        $current['aktif'] = 'account';
        $this->load->view('pasien/header', $current);
        $this->load->view('pasien/account', $data);
        $this->load->view('pasien/footer');
    }

    public function updateAccount()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $umur = $this->input->post('umur');
        $alamat = $this->input->post('alamat');
        $id = $this->mPasien->getPasienByUser($this->session->id)['id_pasien'];
        $this->mPasien->updatePasien($nik, $nama, $umur, $alamat, $id);

        $this->session->set_flashdata('flash', 'Berhasil Update Biodata');
        redirect('Pasien/Account');
    }

    public function updatePicture()
    {

        $data['user'] = $this->mPasien->getUserById(($this->session->id));

        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            }
        } else {
            echo $this->upload->display_errors();
        }

        $this->db->update('user');
        $this->session->set_flashdata('flash', 'Berhasil Update picture');
        $current['aktif'] = 'account';
        redirect('pasien/account');
    }

    public function changePassword(){
        $newpass = $this->input->post('newpassword');
        $confirmpass = $this->input->post('confirmpass');
        $oldpass = $this->input->post('oldpassword');

        if ($oldpass == $this->mPasien->getPassword()){
            if ($newpass == $confirmpass) {
                $this->mPasien->updatePassword($newpass);
                $this->session->set_flashdata('flash', 'Berhasil Ubah Password');
            }
            else{
                $this->session->set_flashdata('flash', 'Password Konfirmasi Harus Sama');
            }
        }
        else{
            $this->session->set_flashdata('flash', 'Password Lama Salah');
        }
        redirect('Pasien/Account');
    }
}
