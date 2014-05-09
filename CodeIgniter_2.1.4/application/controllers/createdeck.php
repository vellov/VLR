<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Createdeck extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('card_model');
    }

    function index() {
        $data['cards'] = $this->card_model->get_cards();
 		if ($this->session->userdata('is_logged_in')) {
        $this->load->view('templates/header_temp', $data);
        $this->load->view('pages/createdeck_view');
        $this->load->view('templates/footer_temp');
		}else{
			  $this->session->set_userdata('redirect', "cards"); //salvestab selle lehe, et logimisel tagasi redirectiks
            $this->session->set_flashdata('autherror', 'Antud lehe nägemiseks on vajalik sisselogimine:');
            redirect('login');
			}
    }
}
?>