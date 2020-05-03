<?php
class profile_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllData()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', array('id' => $id))->result_array()[0];
    }

    public function updateProfile()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            //"upload_image" => $_FILES['image']['name'],
        ];
        //$name = $this->input->post('name');
        //$username = $this->input->post('username');
        //$password => $this->input->post('password');

        //cek gambar
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            }
        } else {
            echo $this->upload->display_errors();
        }

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}
