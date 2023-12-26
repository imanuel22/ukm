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
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$data1['data_jabatan']=$this->mjabatan->get_jabatan($id);
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
	public function edit_fungsionaris($id_fungsionaris) {
		$this->mfungsionaris->edit_fungsionaris($id_fungsionaris);
	}
	public function delete_fungsionaris($id_ukm,$id_fungsionaris) {
		$this->mfungsionaris->delete_fungsionaris($id_ukm,$id_fungsionaris);
	}
	//Fungsionaris End.
	
	//Anggota UKM Start.
	public function anggota_ukm($id) {
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
			'konten'=>$this->load->view('fungsionaris/anggota_ukm/form_anggota',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/anggota_ukm/anggota_ukm',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}

	public function proses_anggotaUKM() {
		$this->manggotaukm->proses_anggotaUKM();
	}
	public function edit_anggotaUKM($id_anggota) {
		$this->manggotaukm->edit_anggotaUKM($id_anggota);
	}
	public function delete_anggota($id_ukm,$id_anggota) {
		$this->manggotaukm->delete_anggota($id_ukm,$id_anggota);
	}
	//Anggota UKM End.

	//Devisi Start.
	public function devisi($id) {
		$data1['data_devisi']=$this->mdevisi->get_devisi($id);
		$data1['id_ukm']=$id;
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('fungsionaris/partial/sitebar',$data1,true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('fungsionaris/devisi/form_devisi',$data1,TRUE),
			'table'=>$this->load->view('fungsionaris/devisi/devisi',$data1,TRUE),
		];
		$this->load->view('dashboard.php',$data);
	}

	public function proses_devisi() {
		$this->mdevisi->proses_devisi();
	}
	public function edit_devisi($id_devisi) {
		$this->mdevisi->edit_devisi($id_devisi);
	}
	public function delete_devisi($id_ukm,$id_devisi) {
		$this->mdevisi->delete_devisi($id_ukm,$id_devisi);
	}
	//Devisi End.


	
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

}
