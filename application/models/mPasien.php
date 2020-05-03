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

	public function getUserById($id)
    {
        return $this->db->get_where('user', array('id' => $id))->result_array()[0];
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

	public function insertPasien($nik, $nama, $umur, $alamat, $username, $password){
		$userdata = [
			'name' => $nama,
			'username' => $username,
			'password' => $password,
			'role_id' => 4,
			'date_created' => 0
		];
		$this->db->insert('user', $userdata);
		$idUser =  $this->db->insert_id();
		
		$pasienData = [
			'nama' => $nama,
			'umur' => $umur,
			'alamat' => $alamat,
			'NIK' => $nik,
			'id_user' => $idUser
		];
		return $this->db->insert('detailpasien', $pasienData);
	}

	public function getPassword(){
		$query = $this->db->get_where('user', array('id' => $this->session->id));
		return $query->result_array()[0]['password'];
	}

	public function updatePassword($newpass){
		return $this->db->update('user', array('password' => $newpass), array('id' => $this->session->id));
	}
}
