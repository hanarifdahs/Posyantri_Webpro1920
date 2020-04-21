<?php 
class kader extends CI_Model{
    function view_all() {
        $this->db->order_by('id');
        return $this->db->get('jadwal');
    }
    function insert_jadwal(){
        $data = [
			"nama_pasien" => $this->input->post('nama_pasien', true),
			"nama_kader" => $this->input->post('nama_kader', true),
			"jam" => $this->input->post('jam', true),
		];
        return $this->db->insert('jadwal', $data);
    }
    function update_jadwal(){
        $data = [
			"nama_pasien" => $this->input->post('nama_pasien', true),
			"nama_kader" => $this->input->post('nama_kader', true),
			"jam" => $this->input->post('jam', true),
		];
		$this->db->where('id', $id);
		//use query builder class to update data mahasiswa based on id
		return $this->db->update('jadwal', $data);
    }
    function delete_jadwal(){
        $this->db->where('id', $id);
		return $this->db->delete('jadwal');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
}
?>