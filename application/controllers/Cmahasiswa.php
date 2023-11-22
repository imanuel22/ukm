	<?php

class Cmahasiswa extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			// $this->load->model('mvalidasi');
			// $this->mvalidasi->validasi();
			$this->load->model('mmahasiswa');
		}
	
	public function dashboard(){
		$data1['data_ukm']=$this->mmahasiswa->getdataukm();
		$data=[
			'title'=>'Dashboard',
			'konten'=>'',
			'table'=>''
		];
		$this->load->view('mahasiswa/dashboard.php',$data);
	}	

	public function ukm(){
		$data1['data_ukm']=$this->mmahasiswa->getdataukm();
		$data=[
			'title'=>'Dashboard',
			'konten'=>$this->load->view('mahasiswa/ukm',$data1,TRUE),
			'table'=>''
		];
		$this->load->view('mahasiswa/dashboard.php',$data);

	}

	// public function informasi_ukm () {
	// 	$this->mmahasiswa->getdataukm();
	// }
	public function daftar_ukm(){
		$data1['data_ukm']=$this->mmahasiswa->getdataukm();
		$data=[
			'title'=>'daftar_ukm',
			'konten'=>$this->load->view('mahasiswa/daftar_ukm',$data1,TRUE),
			'table'=>''
		];
		$this->load->view('mahasiswa/dashboard.php',$data);
	}

	public function ukm_where($id) {
		$data1['data_ukm']=$this->mmahasiswa->getdataukmwhere($id);
		$data=[
			'title'=>'ukm',
			'konten'=>$this->load->view('mahasiswa/ukm_where',$data1,TRUE),
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
