<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
        <meta name="description" content=""></meta>

        <title>Weeee</title>

    </head>
    <body>
			<?php if ($this->session->userdata('is_logged_in')){
                        /*<?php echo $this->session->userdata('email');?> */
						print " Olen suur kala";
                    }
                     else{
      						    $this->load->helper('form');
								$this->load->view('pages/login_view');       
                    }
					
                   ?>
<!-- end header -->	