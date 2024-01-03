<?php

class Canggota extends CI_Controller{
	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
			$this->load->model('mdevisi');
			$this->load->model('mmahasiswa');
			$this->load->model('mdanggota');
			$this->load->model('mjabatan');
			$this->load->model('mfungsionaris');
			$this->load->model('manggotaukm');
			$this->load->model('mproker');
	 		$this->load->model('mdfungsionaris');
	 		$this->load->model('mukm');
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
		$data1['data_devisi']=$this->mdevisi->get_devisi($id);
		$data1['data_jabatan']=$this->mjabatan->get_jabatan($id);
		$data1['data_fungsionaris']=$this->mfungsionaris->get_fungsionaris($id);
		$data1['data_proker']=$this->mproker->get_proker($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM Detail';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('anggota/partial/sitebarukm',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('anggota/ukm_where',$data1,TRUE),
			'table'=>$this->load->view('anggota/form_daftar_fungsionaris',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}


	public function proker($id_ukm,$id_proker) {
		$data1['data_proker']=$this->mproker->get_proker_id($id_proker);
		$title['title']= 'Proker';
		$data1['id_ukm']=$id_ukm;
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('anggota/partial/sitebarukm',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('mahasiswa/proker',$data1,true),
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);
	}
	
	
	public function daftar_fungsionaris(){
		$this->mdfungsionaris->daftar_fungsionaris();
		}

}
