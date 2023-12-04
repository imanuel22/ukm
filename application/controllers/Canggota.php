<?php

class Canggota extends CI_Controller{
	 public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('mvalidasi');
	 		$this->load->model('mukm');
	 		$this->mvalidasi->validasi();
		}
	
		public function dashboard(){
			$data=[
				'title'=>'Dashboard',
				'konten'=>'',
				'table'=>''
			];
			$this->load->view('anggota/dashboard.php',$data);
	
		}
		public function ukm_where($id) {
			$data1['data_ukm']=$this->mukm->get_ukm_id($id);
			$data1['id_ukm']=$id;
			$data=[
				'title'=>'ukm',
				'konten'=>$this->load->view('anggota/ukm_where',$data1,TRUE),
				'table'=>$this->load->view('anggota/daftar_fungsio',$data1,TRUE),
			];
			$this->load->view('anggota/dashboard.php',$data);
	}

	
	public function daftar_fungsio(){
		$data=[
			'title'=>'daftar_fungsio',
			'konten'=>$this->load->view('anggota/daftar_fungsio','',TRUE),
			'table'=>''
		];
		$this->load->view('anggota/dashboard.php',$data);
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
