<?php

class Cadmin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('madmin');
	}
	public function login(){
		$this->load->view('login_admin');
	}
	public function login_proses(){
		$this->madmin->login_proses();
	}
	
}
