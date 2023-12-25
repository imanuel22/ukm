<?php

class Cfungsionaris extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('mukm');
		$this->load->model('mdevisi');
		$this->load->model('mfungsionaris');
		$this->load->model('mmahasiswa');
		$this->load->model('mdanggota');
		$this->load->model('mdfungsionaris');
		$this->load->model('mproker');
		$this->load->model('mjabatan');
		$this->load->model('manggotaukm');
		$this->load->model('mvalidasi');
		$this->mvalidasi->validasi();
	}
	
	public function ukm_where($id) {
		$data1['data_ukm']=$this->mukm->get_ukm_id($id);
		$data1['data_fungsionaris']=$this->mfungsionaris->get_fungsionaris($id);
		$data1['data_proker']=$this->mproker->get_proker($id);

		$data1['data_devisi']=$this->mdevisi->get_devisi($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/ukm/ukm_where',$data1,TRUE),
			'table'=>'',
		];
		$this->load->view('dashboard.php',$data);
	}

	public function ukm_edit($id) {
		$data1['data_ukm']=$this->mukm->get_ukm_id($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/ukm/ukm_edit',$data1,TRUE),
			'table'=>'',
		];
		$this->load->view('dashboard.php',$data);
	}
	//Fungsionaris Start.
	public function fungsionaris($id) {
		$data1['data_fungsionaris']=$this->mfungsionaris->get_fungsionaris($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/fungsionaris/form_fungsionaris',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/fungsionaris/fungsionaris',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}

	public function proses_fungsionaris() {
		$this->mfungsionaris->proses_fungsionaris();
	}
	public function edit_fungsionaris() {
		$this->mfungsionaris->edit_fungsionaris();
	}
	public function delete_fungsionaris($id_ukm,$id_fungsionaris) {
		$this->mfungsionaris->delete_fungsionaris($id_ukm,$id_fungsionaris);
	}
	//Fungsionaris End.
	public function devisi($id) {
		$data1['data_devisi']=$this->mdevisi->get_devisi($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('fungsionaris/devisi/devisi',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function devisi_tambah($id) {
		$data1['data_devisi']=$this->mdevisi->get_devisi($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/devisi/devisi_insert',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/devisi/devisi',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function devisi_edit($id_ukm,$id_devisi) {
		$data1['data_devisi']=$this->mdevisi->get_devisi($id_ukm);
		$data1['data_devisi_id']=$this->mdevisi->get_devisi_id($id_devisi);
		$data1['id_ukm']=$id_ukm;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/devisi/devisi_update',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/devisi/devisi',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}

	public function insert_devisi() {
		$this->mdevisi->insert_devisi();
	}
	public function update_devisi() {
		$this->mdevisi->update_devisi();
	}
	public function delete_devisi($id_ukm,$id_devisi) {
		$this->mdevisi->delete_devisi($id_ukm,$id_devisi);
	}


	
	public function proker($id) {
		$data1['data_proker']=$this->mproker->get_proker($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('fungsionaris/proker/proker',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function proker_tambah($id) {
		$data1['data_proker']=$this->mproker->get_proker($id);
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/proker/proker_insert',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/proker/proker',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function proker_edit($id_ukm,$id_proker) {
		$data1['data_proker']=$this->mproker->get_proker($id_ukm);
		$data1['data_proker_id']=$this->mproker->get_proker_id($id_proker);
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$data1['id_ukm']=$id_ukm;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/proker/proker_update',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/proker/proker',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function insert_proker() {
		$this->mproker->insert_proker();
	}
	public function update_proker() {
		$this->mproker->update_proker();
	}
	public function delete_proker($id_ukm,$id_proker) {
		$this->mproker->delete_proker($id_ukm,$id_proker);
	}

	public function prokers($id_ukm,$id_proker) {
		$data1['data_proker']=$this->mproker->get_proker_id($id_proker);
		$title['title']= 'Mahasiswa';
		$data1['id_ukm']=$id_ukm;
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/ukm/proker',$data1,true),
			'table'=>''
		];
		$this->load->view('dashboard.php',$data);
	}
	public function jabatan($id) {
		$data1['data_jabatan']=$this->mjabatan->get_jabatan($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('fungsionaris/jabatan/jabatan',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function jabatan_tambah($id) {
		$data1['data_jabatan']=$this->mjabatan->get_jabatan($id);
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/jabatan/jabatan_insert',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/jabatan/jabatan',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function jabatan_edit($id_ukm,$id_jabatan) {
		$data1['data_jabatan']=$this->mjabatan->get_jabatan($id_ukm);
		$data1['data_jabatan_id']=$this->mjabatan->get_jabatan_id($id_jabatan);
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$data1['id_ukm']=$id_ukm;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/jabatan/jabatan_update',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/jabatan/jabatan',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function insert_jabatan() {
		$this->mjabatan->insert_jabatan();
	}
	public function update_jabatan() {
		$this->mjabatan->update_jabatan();
	}
	public function delete_jabatan($id_ukm,$id_jabatan) {
		$this->mjabatan->delete_jabatan($id_ukm,$id_jabatan);
	}

	public function proses_ukm() {
		$this->mukm->proses_ukm();
	}


	//verif anggota
	public function verif_anggota($id_ukm) {
		$data1['data_verif_anggota']=$this->mdanggota->get_daftar_anggota();
		$data1['id_ukm']=$id_ukm;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('fungsionaris/anggota_ukm/verif_anggota/table_verif_anggota',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}

	public function verif_anggota_form($id,$id_ukm){
		$data1['data_verif_anggota']=$this->mdanggota->get_daftar_anggota();
		$data1['data_verif_anggota_id']=$this->mdanggota->get_daftar_anggota_id($id);
		$title['title']= 'UKM';
		$data1['id_ukm']= $id_ukm;
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/anggota_ukm/verif_anggota/verif_anggota_form',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/anggota_ukm/verif_anggota/table_verif_anggota',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	
	public function proses_verif_anggota(){
		if($this->input->post('btn')=='berhasil'){
			$this->mdanggota->proses_verif_berhasil();
		}else{
			$this->mdanggota->proseshapus($this->input->post('id_daftar_anggota'));
		}
	}
	public function proseshapus1($id){
		$this->mdanggota->proseshapus($id);
	}

	//verif fungsionaris
	public function verif_fungsionaris($id_ukm) {
		$data1['data_verif_fungsionaris']=$this->mdfungsionaris->get_daftar_fungsionaris();
		$data1['id_ukm']=$id_ukm;		
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('fungsionaris/fungsionaris/verif_fungsionaris/table_verif_fungsionaris',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}

	public function verif_fungsionaris_form($id_daftar_fungsionaris,$id_ukm){
		$data1['data_verif_fungsionaris']=$this->mdfungsionaris->get_daftar_fungsionaris();
		$data1['data_verif_fungsionaris_id']=$this->mdfungsionaris->get_daftar_fungsionaris_id($id_daftar_fungsionaris);
		$data1['id_ukm']=$id_ukm;		

		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/fungsionaris/verif_fungsionaris/verif_fungsionaris_form',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/fungsionaris/verif_fungsionaris/table_verif_fungsionaris',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	
	public function proses_verif_fungsionaris(){
		if($this->input->post('btn')=='berhasil'){
		$this->mdfungsionaris->proses_verif_berhasil();
		}else{
		$this->mdfungsionaris->proseshapus($this->input->post('id_daftar_anggota'));}
	}
	public function proseshapus2($id){
		$this->mdfungsionaris->proseshapus($id);
	}

	public function anggota_ukm($id) {
		$data1['data_anggota_ukm']=$this->manggotaukm->get_anggota_ukm($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('fungsionaris/anggota_ukm/anggota_ukm',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function anggota_tambah($id) {
		$data1['data_anggota_ukm']=$this->manggotaukm->get_anggota_ukm($id);
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$data1['data_devisi']=$this->mdevisi->get_devisi($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/anggota_ukm/anggota_insert',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/anggota_ukm/anggota_ukm',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function anggota_edit($id_ukm,$id_anggota) {
		$data1['data_anggota_ukm']=$this->manggotaukm->get_anggota_ukm($id_ukm);
		$data1['data_anggota_id']=$this->manggotaukm->get_anggota_id($id_anggota);
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$data1['data_devisi']=$this->mdevisi->get_devisi($id_ukm);
		$data1['id_ukm']=$id_ukm;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/anggota_ukm/anggota_update',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/anggota_ukm/anggota_ukm',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}
	public function insert_anggota() {
		$this->manggotaukm->insert_anggota();
	}
	public function update_anggota() {
		$this->manggotaukm->update_anggota();
	}
	public function delete_anggota($id_ukm,$id_anggota) {
		$this->manggotaukm->delete_anggota($id_ukm,$id_anggota);
	}



















		
	// 	//old
	// public function dashboard(){
	// 	$data=['judul'=>'dashboard'
	// 		];
	// 	$this->load->view('fungsio/header.php',$data);
	// 	$this->load->view('fungsio/dasboard.php');
	// 	$this->load->view('fungsio/footer.php');
	// }

	// public function ukm() {
	// 	$dataukm=$this->mfungsio->getviewukm();
	// 	$data=['judul'=>'dashboard',
	// 		   'data_ukm'=>$dataukm
	// 		];
	// 	$this->load->view('fungsio/header.php',$data);
	// 	$this->load->view('fungsio/ukm/ukm.php',$data);
	// 	$this->load->view('fungsio/footer.php');
	// }

	// public function forminsertukm(){
	// 	$dataukm=$this->mfungsio->getviewukm();
	// 	$data=['judul'=>'dashboard',
	// 		   'data_ukm'=>$dataukm
	// 		];
	// 	$this->load->view('fungsio/header.php',$data);
	// 	$this->load->view('fungsio/ukm/insert.php',$data);
	// 	$this->load->view('fungsio/footer.php');
	// }

	// public function prosesinsertukm() {
	// 	$this->mfungsio->prosesinsertukm();
	// }

	// public function prosesdeleteukm($id) {
	// 	$this->mfungsio->prosesdeleteukm($id);
	// }

	// public function formupdateukm($id){
	// 	$dataukmdetail=$this->mfungsio->getdataukm($id);
	// 	$data=['judul'=>'dashboard',
	// 			'tombol'=>'active',
	// 			'data_ukm1'=>$dataukmdetail
	// 		];
	// 	$this->load->view('test/header.php',$data);
	// 	$this->load->view('fungsio/ukm/update.php',$data);
	// 	$this->load->view('test/footer.php');
	// }
	// public function prosesupdateukm(){
	// 	$this->mfungsio->prosesupdateukm();
	// }


	// // public function proker() {
	// // 	$dataproker=$this->mfungsio->getviewproker();
	// // 	$data=['judul'=>'dashboard',
	// // 		   'data_proker'=>$dataproker
	// // 		];
	// // 	$this->load->view('fungsio/header.php',$data);
	// // 	$this->load->view('fungsio/proker/proker.php',$data);
	// // 	$this->load->view('fungsio/footer.php');
	// // }

	// // public function forminsertproker(){
	// // 	$dataproker=$this->mfungsio->getviewproker();
	// // 	$data=['judul'=>'dashboard',
	// // 		   'data_proker'=>$dataproker
	// // 		];
	// // 	$this->load->view('fungsio/header.php',$data);
	// // 	$this->load->view('fungsio/proker/insert.php',$data);
	// // 	$this->load->view('fungsio/footer.php');
	// // }

	// // public function prosesinsertproker() {
	// // 	$this->mfungsio->prosesinsertproker();
	// // }

	// // public function prosesdeleteproker($id) {
	// // 	$this->mfungsio->prosesdeleteproker($id);
	// // }

	// public function formupdateproker($id){
	// 	$dataprokerdetail=$this->mfungsio->getdataproker($id);
	// 	$data=['judul'=>'dashboard',
	// 			'tombol'=>'active',
	// 			'data_proker1'=>$dataprokerdetail
	// 		];
	// 	$this->load->view('test/header.php',$data);
	// 	$this->load->view('fungsio/proker/update.php',$data);
	// 	$this->load->view('test/footer.php');
	// }
	// public function prosesupdateproker(){
	// 	$this->mfungsio->prosesupdateproker();
	// }






	// function logout()
	// 	{
	// 		$this->session->sess_destroy();
	// 		redirect('clogin/login','refresh');	
	// 	}

}
