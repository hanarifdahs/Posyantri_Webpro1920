<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mBooking extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getAllBooking(){
		return $this->db->get('booking');
    }

    public function getBookingbyID($id_booking){

    }
    
    public function insertBooking($id_jadwal, $id_pasien){
        $data = [
			"id_jadwal" => $id_jadwal,
			"id_pasien" => $id_pasien,
			"konfirmasi" => 0
		];
		return $this->db->insert('booking', $data);
    }

    public function konfirmasiBooking($id_booking){
        return $this->db->update('booking', array('konfirmasi' => 1), array('id_booking' => $id_booking));
    }

    public function deleteBooking($id_booking){
        $confirmed = $this->db->get_where('booking', array('id_booking' => $id_booking))->result_array()[0]['konfirmasi'];
        if (!$confirmed){
            return $this->db->delete('booking', array('id_booking' => $id_booking));
        }
        else{
            return false;
        }
    }
}
?>