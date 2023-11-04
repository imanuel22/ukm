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
		$data=['judul'=>'dashboard'];
		$this->load->view('test/header.php',$data);
		$this->load->view('ketua/dasboard.php');
		$this->load->view('test/footer.php');
	}
	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

	function ukm() {
		$data1['data_mhs']=$this->mketua->getdataukm();
		$data1['data_prodi']=$this->mketua->getdataproker();
		$data=[
			'title'=>'Data UKM',
			'konten'=>$this->load->view('ketua/ukm/form_ukm_insert',$data1,TRUE),
			'table'=>$this->load->view('ketua/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('ketua/dashboard.php',$data);
	}

	public function insert_data_ukm()
	{
		$this->mketua->insert_data_ukm();
	}

	public function update_data_ukm()
	{
		$this->mketua->update_data_ukm();
	}

	
}
