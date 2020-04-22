<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class mUser extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function cekLogin($username,$password) {
        $where = array(
			'username' => $username,
			'password' => $password
		);
        $query = $this->db->get_where('user', $where);
        return $query;
    }	
    
    public function cekRole($role_id){
        return $this->db->get_where('role', array('id' => $role_id))->result_array()[0]['role'];
    }
}