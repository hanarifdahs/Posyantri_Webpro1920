<?php

class petugas_model extends CI_model
{
    public function getAllPetugas()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function tambahDataPetugas()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "role_id" => '3'
        ];

        $this->db->insert('user', $data);
    }

    public function hapusDataPetugas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getPetugasbyId($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateDataPetugas()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "role_id" => '3'
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
