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
		$data=[
			'title'=>'Data UKM',
			'konten'=>'',
			'table'=>$this->load->view('ketua/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('ketua/dashboard.php',$data);
	}

	function ukm_edit($id_ukm) {
		$data1['data_ukm']=$this->mketua->getdataukm();
		$data1['data_ukm_where']=$this->mketua->getdataukmwhere($id_ukm);
		$data=[
			'title'=>'Data UKM',
			'konten'=>$this->load->view('ketua/ukm/form_ukm_update',$data1,true),
			'table'=>$this->load->view('ketua/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('ketua/dashboard.php',$data);
	}
	public function update_data_ukm()
	{
		$this->mketua->update_data_ukm();
	}

	
}
