<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mJadwal extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getAllJadwal(){
		$this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('kategori', 'kategori.id_kategori = jadwal.id_kategori');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>