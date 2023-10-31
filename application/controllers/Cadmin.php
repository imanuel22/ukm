<?php

class Cadmin extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
		}
	
	public function aindex(){
		$this->load->view('test/header.php');
		$this->load->view('admin_index.php');
		$this->load->view('test/footer.php');
		
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect('ctampil/login','refresh');	
		}

	// public function djurusan(){
	// 	$this->load->view('login_view.php');
	// }
	// public function dprodi(){
	// 	$this->load->view('login_view.php');
	// }
	// public function jpendafaran(){
	// 	$this->load->view('login_view.php');
	// }
	// public function dcmahasiswa(){
	// 	$this->load->view('login_view.php');
	// }
	// public function laporandata(){
	// 	$this->load->view('login_view.php');
	// }

}
