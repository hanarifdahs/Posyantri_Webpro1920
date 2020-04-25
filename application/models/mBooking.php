<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mBooking extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function getAllBooking(){
        $query = $this->db->get('booking');
        return $query->result_array();
    }

    public function getBookingbyID($id_booking){
        return $this->db->get_where('booking', ['id_booking' => $id_booking])->row_array();
    }
    
    public function insertBooking($id_jadwal, $id_pasien){
        $data = [
			'id_jadwal' => $id_jadwal,
			'id_pasien' => $id_pasien,
            'konfirmasi' => 0,
            'selesai' => 0
		];
        $this->db->insert('booking', $data);
        return $this->db->insert_id();
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