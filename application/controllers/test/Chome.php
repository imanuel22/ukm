<?php

class Chome extends CI_Controller{
	public function login(){
		$this->load->view('login.php');
	}

	public function register(){
		$this->load->view('register.php');
	}
}
?>
