<?php 
class kader_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    function view_all() {
        $this->db->order_by('id_jadwal');
        return $this->db->get('jadwal');
    }
    function insert_jadwal(){
        $data = [
			"id_kategori" => $this->input->post('id_kategori', true),
			"id_petugas" => $this->input->post('id_petugas', true),
            "jam" => $this->input->post('jam', true),
            "tanggal" => $this->input->post('tanggal',true),
		];
        return $this->db->insert('jadwal', $data);
    }
    function update_jadwal(){
        $data = [
			"id_kategori" => $this->input->post('id_kategori', true),
			"id_petugas" => $this->input->post('id_petugas', true),
            "jam" => $this->input->post('jam', true),
            "tanggal" => $this->input->post('tanggal',true)
		];
		$this->db->where('id_jadwal', $id_jadwal);
		//use query builder class to update data mahasiswa based on id
		return $this->db->update('jadwal', $data);
    }
    function delete_jadwal(){
        $this->db->where('id_jadwal', $id_jadwal);
		return $this->db->delete('jadwal');
    }
    function confirm_book(){
        $this->db->set('konfirmasi', True);
        $this->db->where('id_booking', $id_booking);
        return $this->db->update('booking');
    }
    function take_jadwal(){
        $this->db->set('taken', True);
        $this->db->where('id_jadwal', $id_jadwal);
        return $this->db->update('jadwal');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
    //-----------------------------------------------------
    //-----------------------------------------------------
    public function getAllKader()
    {
        $query = $this->db->get('user');
        return $query->result_array();
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
?>