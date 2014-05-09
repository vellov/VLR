<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'Off');  //On or Off

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    public function index() {
		$this->load->view('templates/header_temp');
		$this->load->view('pages/login_view');
		$this->load->view('templates/footer_temp');
        $this->login();
    }

    public function login() {

 		 $email=$this->input->post('email');
 		 $password=md5($this->input->post('pass'));
	   	 $this->load->model('user_model');
	  if ($this->session->userdata('redirect')) {
                redirect($this->session->userdata('redirect'));
	  }
  		 
	}
	


}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
?>