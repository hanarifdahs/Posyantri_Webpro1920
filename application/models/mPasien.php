<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mPasien extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getAllPasien(){
		return $this->db->get('pasien');
	}

	public function getPasienByUser($id_user){
		return $this->db->get_where('detailpasien', array('id_user' => $id_user))->result_array()[0];
	}

	public function updatePasien($nik, $nama, $umur, $alamat, $id_pasien){
		$data = [
			'nama' => $nama,
			'umur' => $umur,
			'alamat' => $alamat,
			'NIK' => $nik
		];
		return $this->db->update('detailpasien', $data, array('id_pasien' => $id_pasien));
	}
}
?>