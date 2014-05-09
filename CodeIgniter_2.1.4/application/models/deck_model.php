<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Deck_model extends CI_Model {

    function get_decks() {
        $query = $this->db->get('deckexampl');
        return $query->result_array();
    }
	function get_cards(){
	$this->db->select('cards.id,deckexampl.c1');
	$this->db->from('cards');
	$this->db->join('deckexampl','cards.id=deckexampl.c1');
	$query=$this->db->get();
	
	return $query->result();
	}
}
?>