<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Card_model extends CI_Model {

    function get_cards() {
        $query = $this->db->get('cards');
        return $query->result_array();
    }
	function get_card($id){
		$this->db->select('*');
        $this->db->where('id', $id);
        $this->db->from('cards');
        $query = $this->db->get();
		return $query->result_array();
	}
}
?>