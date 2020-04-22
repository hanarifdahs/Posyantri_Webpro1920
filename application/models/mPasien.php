<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mPasien extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getAllPasien(){
		return $this->db->get('pasien');
	}

	public function getPasienbyUser($id_user){
		return $this->db->get_where('pasien', array('id_user' => $id_user))->result_array()[0]['id_pasien'];
	}
}
?>