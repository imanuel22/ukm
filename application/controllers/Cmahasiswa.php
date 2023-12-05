	<?php

class Cmahasiswa extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
			$this->load->model('mukm');
			$this->load->model('mdevisi');
			$this->load->model('mmahasiswa');
			$this->load->model('mdanggota');
		}
	
	public function dashboard(){
		$data1['data_ukm']=$this->mukm->get_ukm();
		$data=[
			'title'=>'Dashboard',
			'konten'=>'',
			'table'=>''
		];
		$this->load->view('mahasiswa/dashboard.php',$data);
	}	

	public function ukm(){
		$data1['data_ukm']=$this->mukm->get_ukm();
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
		$data1['data_ukm']=$this->mukm->get_ukm();
		$data=[
			'title'=>'daftar_ukm',
			'konten'=>$this->load->view('mahasiswa/daftar_ukm',$data1,TRUE),
			'table'=>''
		];
		$this->load->view('mahasiswa/dashboard.php',$data);
	}

	public function cek_level_user($id_ukm){
		$this->mvalidasi->cek_level_user($id_ukm);
		if($this->session->userdata('level')=='anggota_ukm'){
			redirect('canggota/ukm_where/'.$id_ukm);
		}else if($this->session->userdata('level')=='fungsionaris'){
			redirect('cfungsionaris/ukm_where/'.$id_ukm);
		}else{
			redirect('cmahasiswa/ukm_where/'.$id_ukm);
		}
	}
	

	public function ukm_where($id) {
			$data1['data_ukm']=$this->mukm->get_ukm_id($id);
			$data1['data_devisi']=$this->mdevisi->get_devisi($id);
			$data1['id_ukm']=$id;
			$data=[
				'title'=>'ukm',
				'konten'=>$this->load->view('mahasiswa/ukm_where',$data1,TRUE),
				'table'=>$this->load->view('mahasiswa/form_daftar_anggota',$data1,TRUE),
			];
			$this->load->view('mahasiswa/dashboard.php',$data);
	}

	public function daftar_anggota(){
		$this->mdanggota->daftar_anggota();
	}

	public function card()  {
		$data=[
			'title'=>'card',
			'konten'=>$this->load->view('mahasiswa/card','',TRUE),
			'table'=>'',
		];
		$this->load->view('mahasiswa/dashboard.php',$data);
	}

	function logout()
		{
			$this->session->sess_destroy();
			redirect('clogin/login','refresh');	
		}

}
