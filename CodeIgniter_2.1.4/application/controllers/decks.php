<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Decks extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('deck_model');
    }

    function index() {
        $data['deckexampl'] = $this->deck_model->get_decks();
 		if ($this->session->userdata('is_logged_in')) {
        $this->load->view('templates/header_temp', $data);
        $this->load->view('pages/deck_view');
        $this->load->view('templates/footer_temp');
		}else{
			  $this->session->set_userdata('redirect', "decks"); //salvestab selle lehe, et logimisel tagasi redirectiks
            $this->session->set_flashdata('autherror', 'Antud lehe nägemiseks on vajalik sisselogimine:');
            redirect('login');
			}
    }
}
?>