<?php

class Cfungsio extends CI_Controller{
	// public function __construct()
	// 	{
	// 		parent::__construct();
	// 		$this->load->model('mvalidasi');
	// 		$this->mvalidasi->validasi();
	// 	}
	
	public function dashboard(){
		$data=['judul'=>'dashboard'];
		$this->load->view('test/header.php',$data);
		$this->load->view('fungsio/dasboard.php');
		$this->load->view('test/footer.php');
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
