<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mJadwal extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

    public function getAllJadwal()
    {
        $query = $this->db->get('jadwal');
        return $query->result_array();
    }

    public function tambahJadwal()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "jam" => $this->input->post('jam', true),
            "id_kategori" => $this->input->post('id_kategori', true),
            "id_petugas" => $this->input->post('id_petugas',true),
            "taken" => '0'
        ];

        $this->db->insert('jadwal', $data);
    }

    public function delete_jadwal($id_jadwal)
    {
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->delete('jadwal');
    }

    public function getJadwalbyId($id)
    {
        return $this->db->get_where('jadwal', ['id_jadwal' => $id])->row_array();
    }

    public function updateJadwal()
    {
        $data = [
            "tanggal" => $this->input->post('tanggal', true),
            "jam" => $this->input->post('jam', true),
            "id_kategori" => $this->input->post('id_kategori', true),
            "id_petugas" => $this->input->post('id_petugas',true),
            "taken" => '0'
        ];

        $this->db->where('id_jadwal', $this->input->post('id_jadwal'));
        $this->db->update('jadwal', $data);
    }

    public function take_jadwal($id_jadwal){
        $this->db->update('jadwal', array('taken' => 1), array('id_jadwal' => $id_jadwal));
    }
}
?>