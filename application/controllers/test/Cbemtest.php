<?php

class Cbemtest extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('mbem');
		}
	
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
		$dataukm=$this->mbem->prosesviewukm();
		$data=['judul'=>'dashboard',
				'tombol'=>'active',
				'data_ukm'=>$dataukm			
			];

		$this->load->view('test/header.php',$data);
		$this->load->view('bem/ukm/ukm.php',$data);
		$this->load->view('test/footer.php');
	}

	public function insertukm(){
		$datamhs=$this->mbem->getdatamahasiswa();
		echo "<pre>".print_r($datamhs)."</pre>";
		$data=['judul'=>'dashboard',
				'tombol'=>'active',
				'datamhs'=>$datamhs
			];
		$this->load->view('test/header.php',$data);
		$this->load->view('bem/ukm/insert.php',$data);
		$this->load->view('test/footer.php');
	}

	public function prosesinsertukm(){
		$this->mbem->prosesinsertukm();
	}

	public function updateukm($id){
		$dataukmdetail=$this->mbem->getdataukm($id);
		$data=['judul'=>'dashboard',
				'tombol'=>'active',
				'data_ukm1'=>$dataukmdetail
			];
		$this->load->view('test/header.php',$data);
		$this->load->view('bem/ukm/update.php',$data);
		$this->load->view('test/footer.php');
	}

	public function prosesupdateukm(){
		$this->mbem->prosesupdateukm();
	}

	public function prosesdeleteukm($id_ukm){
		$this->mbem->prosesdeleteukm($id_ukm);
	}
	

	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
