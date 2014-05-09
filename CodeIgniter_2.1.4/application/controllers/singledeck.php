<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Singledeck extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('deck_model');
    }

    function index() {
		if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
      
    }
        $data['singledeck'] = $this->deck_model->get_cards();
 		if ($this->session->userdata('is_logged_in')) {
        $this->load->view('templates/header_temp', $data);
        $this->load->view('pages/singledeck_view');
        $this->load->view('templates/footer_temp');
		}else{
			  $this->session->set_userdata('redirect', "singledeck"); //salvestab selle lehe, et logimisel tagasi redirectiks
            $this->session->set_flashdata('autherror', 'Antud lehe nägemiseks on vajalik sisselogimine:');
            redirect('login');
			}
    }
}
?>