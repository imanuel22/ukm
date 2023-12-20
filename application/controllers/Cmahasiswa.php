	<?php

class Cmahasiswa extends CI_Controller{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
			$this->load->model('mukm');
			$this->load->model('mdevisi');
			$this->load->model('mprodi');
			$this->load->model('mmahasiswa');
			$this->load->model('mdanggota');
		}
	
	public function dashboard(){
		$data1['data_ukm']=$this->mukm->get_ukm();
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);
	}	

	public function ukm(){
		$data1['data_ukm']=$this->mukm->get_ukm();
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('mahasiswa/ukm',$data1,TRUE),
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);

	}

	
	public function daftar_ukm(){
		$data1['data_ukm']=$this->mukm->get_ukm();
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('mahasiswa/daftar_ukm',$data1,TRUE),
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);
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
	
	public function profile($id_mahasiswa){
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa_id($id_mahasiswa);
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('mahasiswa/profile',$data1,true),
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);

	}
	public function profile_edit($id_mahasiswa){
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa_id($id_mahasiswa);
		$data1['data_prodi']=$this->mprodi->get_prodi();
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('mahasiswa/profile_edit',$data1,true),
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);

	}
	public function proses_edit_profile () {
		$this->mmahasiswa->proses_edit_profile();
	}
	public function ukm_where($id) {
			$data1['data_ukm']=$this->mukm->get_ukm_id($id);
			$data1['data_devisi']=$this->mdevisi->get_devisi($id);
			$data1['data_devisi']=$this->mdevisi->get_devisi($id);
			$data1['id_ukm']=$id;
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
				'konten'=>$this->load->view('mahasiswa/ukm_where',$data1,TRUE),
				'table'=>$this->load->view('mahasiswa/form_daftar_anggota',$data1,TRUE),
			];
			$this->load->view('dashboard.php',$data);
	}

	public function daftar_anggota(){
		$this->mdanggota->daftar_anggota();
	}

	public function card()  {
		$title['title']= 'Mahasiswa';
		$data1['data_card']=$this->mukm->get_card();
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('mahasiswa/card',$data1,TRUE),
			'table'=>'',
		];
		$this->load->view('dashboard.php',$data);
	}

}
