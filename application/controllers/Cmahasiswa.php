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
		$data2['data_ukm']=$this->mmahasiswa->getdataukm();
		echo"<pre>".print_r($data1)."</pre>";
		$data1['data']=$data2;
		$data=[
			'title'=>'Dashboard',
			'konten'=>$this->load->view('mahasiswa/table_ukm',$data1,TRUE),
			'table'=>''
		];
		$this->load->view('mahasiswa/dashboard.php',$data);
	}

	// public function informasi_ukm () {
	// 	$this->mmahasiswa->getdataukm();
	// }

	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
