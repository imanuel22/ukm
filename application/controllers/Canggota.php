<?php

class Canggota extends CI_Controller{
	 public function __construct()
	 	{
	 		parent::__construct();
	 		//$this->load->model('mvalidasi');
	 		//$this->mvalidasi->validasi();
		}
	
		public function dashboard(){
			$data=[
				'title'=>'Dashboard',
				'konten'=>'',
				'table'=>''
			];
			$this->load->view('anggota/dashboard.php',$data);
	
		}
	public function daftar_fungsio(){
		$data=[
			'title'=>'daftar_fungsio',
			'konten'=>$this->load->view('anggota/daftar_fungsio','',TRUE),
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
