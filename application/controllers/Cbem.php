<?php

class Cbem extends CI_Controller{
	// public function __construct()
	// 	{
	// 		parent::__construct();
	// 		$this->load->model('mvalidasi');
	// 		$this->mvalidasi->validasi();
	// 	}
	
	public function dashboard(){
		$data=['judul'=>'dashboard',
				'tombol'=>'active'];
		$this->load->view('test/header.php',$data);
		$this->load->view('bem/dasboard.php');
		$this->load->view('test/footer.php');
	}

	public function mahasiswa(){
		$data=['judul'=>'dashboard',
				'tombol'=>'active'];
		$this->load->view('test/header.php',$data);
		$this->load->view('bem/mahasiswa.php');
		$this->load->view('test/footer.php');
	}

	public function ukm(){
		$data=['judul'=>'dashboard',
				'tombol'=>'active'];
		$this->load->view('test/header.php',$data);
		$this->load->view('bem/ukm.php');
		$this->load->view('test/footer.php');
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
