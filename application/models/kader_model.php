<?php
class kader_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    //-----------------------------------------------------
    //-----------------------------------------------------
    public function getAllKader()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function getdataforfooter($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function tambahDataKader()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "role_id" => '2'
        ];

        $this->db->insert('user', $data);
    }

    public function hapusDataKader($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getKaderbyId($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateDatakader()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "role_id" => '2'
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
