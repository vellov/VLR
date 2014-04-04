<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function can_log_in() {
        $this->db->select('id', 'email', 'username');
        $this->db->where('email', $this->input->post('email'));
        $this->db->where('password', ($this->input->post('password')));

        $query = $this->db->get('user');

        if ($query->num_rows() == 1) {

            return true;
        } else {
            return false;
        }
    }

    public function getuserinfo($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('user');
        return $query->row();
    }

}
