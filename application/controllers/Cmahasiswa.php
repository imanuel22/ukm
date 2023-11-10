<?php

class Cmahasiswa extends CI_Controller{
	// public function __construct()
	// 	{
	// 		parent::__construct();
	// 		$this->load->model('mvalidasi');
	// 		$this->mvalidasi->validasi();
	// 	}
	
	public function dashboard()
	{	
		$data=[
			'title'=>'Dashboard',
			'konten'=>'',
			'table'=>''
		];
		$this->load->view('mahasiswa/dashboard.php',$data);
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
