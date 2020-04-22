<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mPasien extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getAllPasien(){
		return $this->db->get('pasien');
	}

}
?>