<?php

class Cketua extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			// $this->load->model('mvalidasi');
			// $this->mvalidasi->validasi();
			$this->load->model('mketua');
		}
	
	public function dashboard(){
		// $data=['judul'=>'dashboard'];
		// $this->load->view('test/header.php',$data);
		// $this->load->view('ketua/dasboard.php');
		// $this->load->view('test/footer.php');

		$data=[
			'title'=>'Dashboard',
			'konten'=>'',
			'table'=>''
		];
		$this->load->view('ketua/dashboard.php',$data);
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

	function ukm() {
		$data1['data_ukm']=$this->mketua->getdataukm();
<<<<<<< HEAD
		$data1['data_proker']=$this->mketua->getdataproker();
=======
		$data1['data_prodi']=$this->mketua->getdataproker();
>>>>>>> f25ec2c082c6814c7421ead7573e01b997f86f50
		$data=[
			'title'=>'Data UKM',
			'konten'=>'',
			'table'=>$this->load->view('ketua/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('ketua/dashboard.php',$data);
	}

	public function update_data_ukm()
	{
		$this->mketua->update_data_ukm();
	}

	
}
