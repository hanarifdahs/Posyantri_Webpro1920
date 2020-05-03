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

    public function getAllBookingJoin(){
		$this->db->select('*');
        $this->db->from('booking');
        $this->db->join('jadwal', 'jadwal.id_jadwal = booking.id_jadwal');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getBookingbyID($id_booking){
        return $this->db->get_where('booking', ['id_booking' => $id_booking])->row_array();
    }

    public function getBookingByPasien_JoinJadwalKategori($id_pasien){
        $this->db->join('jadwal', 'booking.id_jadwal = jadwal.id_jadwal');
        $this->db->join('kategori', 'kategori.id_kategori = jadwal.id_kategori');
        $query = $this->db->get_where('booking', array('id_pasien' => $id_pasien));
        return $query->result_array();
    }

    public function getJadwalByBooking_JoinKategori($id_booking){
        $this->db->join('jadwal', 'booking.id_jadwal = jadwal.id_jadwal');
        $this->db->join('kategori', 'kategori.id_kategori = jadwal.id_kategori');
        $query = $this->db->get_where('booking', array('id_booking' => $id_booking));
        return $query->result_array();
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