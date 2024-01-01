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
			$this->load->model('mjurusan');
			$this->load->model('mmahasiswa');
			$this->load->model('mcard');
			$this->load->model('mfungsionaris');
			$this->load->model('mproker');
			$this->load->model('mdanggota');
		}
	
	public function dashboard(){
		$data1['data_ukm']=$this->mukm->get_ukm();
		$title['title']= 'Dashboard';
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
		$title['title']= 'UKM';
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
	public function data_mahasiswa($id_mahasiswa)  {
		$this->mmahasiswa->data_mahasiswa($id_mahasiswa);
	}
	
	public function profile($id_mahasiswa){
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa_id($id_mahasiswa);
		$data1['data_prodi']= $this->mprodi->get_prodi();
		$data1['data_jurusan']= $this->mjurusan->get_jurusan();
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


	public function proker($id_ukm,$id_proker) {
		$data1['data_proker']=$this->mproker->get_proker_id($id_proker);
		$title['title']= 'Mahasiswa';
		$data1['id_ukm']=$id_ukm;
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebarukm',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('mahasiswa/proker',$data1,true),
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);
	}

	public function ukm_where($id) {
		$data1['data_ukm']=$this->mukm->get_ukm_id($id);
		$data1['data_devisi']=$this->mdevisi->get_devisi($id);
		$data1['data_fungsionaris']=$this->mfungsionaris->get_fungsionaris($id);
		$data1['data_proker']=$this->mproker->get_proker($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM Detail';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('mahasiswa/partial/sitebarukm',$data1,true),
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
		$title['title']= 'Katru UKM';
		$data1['data_cardF']=$this->mcard->card_fungsionaris($this->session->userdata('id_mahasiswa'));
		$data1['data_cardA']=$this->mcard->card_anggotaUKM($this->session->userdata('id_mahasiswa'));
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

	public function getprodi() {
		$id_jurusan = $this->input->post('id_jurusan');
		$getprodi=$this->mprodi->get_prodi_id_jurusan($id_jurusan);
		echo json_encode($getprodi);
	}
}
