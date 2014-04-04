<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
-->
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"></meta>
        <meta name="description" content="Wee homepage"></meta>
        <link rel="stylesheet" href="../../../assets/css/style.css" type="text/css"></link>

        <title>Wee Hs page</title>
    </head>
    <body>

        <div id="container">

            <!-- begin header -->
            <div id="header">

                <!-- logo -->
          
          
                <a href="<?php echo base_url();?>">
                <img src="<?php echo base_url('assets/img/hearthstone.png');?>" alt="logopilt" class='logo'/>
                </a>

                <!-- sign up and login links -->

                <!-- /sign up and login buttons-->

                <!-- navigation -->
                <ul id="list-nav">
                    <li><a href="<?php echo base_url();?>">Cards</a></li>
                    <li><a href="<?php echo base_url();?>">Decks</a></li>
                    
                  
                </ul>
                <div id="loginregister">
                 <?php
				 
                    if ($this->session->userdata('is_logged_in')) {
						 echo '<a href="' . base_url("logout") . '" class="register_link">Log Out</a>';
						}else {
                        echo '<a href="' . base_url("register") . '" class="register_link">Register</a>';
						echo '<a href="' . base_url("login") . '" class="register_link">Log in</a>';

                    }
				  ?>
				</div>
                <!-- /navigation -->

            </div>

            <!-- end header -->	

