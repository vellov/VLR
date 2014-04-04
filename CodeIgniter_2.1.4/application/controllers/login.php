<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
	
    }

    public function index() {

        $this->login();
    }

    public function login() {

 		 $email=$this->input->post('email');
 		 $password=md5($this->input->post('pass'));
	$this->load->model('user_model');
  		 $result=$this->user_model->login($email,$password);
 		 if($result) $this->welcome();
 		 else        $this->index();
	}


}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
