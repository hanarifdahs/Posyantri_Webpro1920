<?php

class mKategori extends CI_model
{
    public function getAllKategori()
    {
        $query = $this->db->get('kategori');
        return $query->result_array();
    }
}