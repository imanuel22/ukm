<?php

class Cfungsio extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('mfungsio');
		}
	
	public function dashboard(){
		$data=['judul'=>'dashboard'
			];
		$this->load->view('fungsio/header.php',$data);
		$this->load->view('fungsio/dasboard.php');
		$this->load->view('fungsio/footer.php');
	}

	public function ukm() {
		$dataukm=$this->mfungsio->getviewukm();
		$data=['judul'=>'dashboard',
			   'data_ukm'=>$dataukm
			];
		$this->load->view('fungsio/header.php',$data);
		$this->load->view('fungsio/ukm/ukm.php',$data);
		$this->load->view('fungsio/footer.php');
	}

	public function forminsertukm(){
		$dataukm=$this->mfungsio->getviewukm();
		$data=['judul'=>'dashboard',
			   'data_ukm'=>$dataukm
			];
		$this->load->view('fungsio/header.php',$data);
		$this->load->view('fungsio/ukm/insert.php',$data);
		$this->load->view('fungsio/footer.php');
	}

	public function prosesinsertukm() {
		$this->mfungsio->prosesinsertukm();
	}

	public function prosesdeleteukm($id) {
		$this->mfungsio->prosesdeleteukm($id);
	}

	public function formupdateukm($id){
		$dataukmdetail=$this->mfungsio->getdataukm($id);
		$data=['judul'=>'dashboard',
				'tombol'=>'active',
				'data_ukm1'=>$dataukmdetail
			];
		$this->load->view('test/header.php',$data);
		$this->load->view('fungsio/ukm/update.php',$data);
		$this->load->view('test/footer.php');
	}
	public function prosesupdateukm(){
		$this->mfungsio->prosesupdateukm();
	}






	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
