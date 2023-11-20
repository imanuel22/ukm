<?php

class Clogin extends CI_Controller{
	public function login(){
		$this->load->view('login');
	}
	public function proseslogin(){

		
		$this->load->view('superadmin/dashboard'); 
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('clogin/login','refresh');	
	}
}
?>