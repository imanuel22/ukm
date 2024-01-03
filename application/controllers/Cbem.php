<?php

class Cbem extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mvalidasi');
		$this->mvalidasi->validasi();
		$this->load->model('mmahasiswa');
		$this->load->model('mjurusan');
		$this->load->model('mprodi');
		$this->load->model('mdmahasiswa');
		$this->load->model('mukm');
	}


	//halaman utama
	public function dashboard() {
		$title['title']= 'Dashboard';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('bem/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>'',
			];

		$this->load->view('dashboard',$data);
	}

	//Jurusan Start.
	public function jurusan() {
		$data1['data_jurusan']=$this->mjurusan->get_jurusan();
		$title['title']= 'Jurusan';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('bem/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/jurusan/form_jurusan','',TRUE),
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function proses_jurusan() {
		$this->mjurusan->proses_jurusan();	
	}
	public function edit_jurusan($id_jurusan) {
		$this->mjurusan->edit_jurusan($id_jurusan);	
	}
	public function delete_jurusan($id_jurusan){
		$this->mjurusan->delete_jurusan($id_jurusan);
	}
	//Jurusan End.

	//prodi Start.
	public function prodi() {
		$data1['data_prodi']=$this->mprodi->get_prodi();
		$data1['data_jurusan']=$this->mjurusan->get_jurusan();
		$title['title']= 'Prodi';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('bem/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/prodi/form_prodi',$data1,TRUE),
			'table'=>$this->load->view('superadmin/prodi/table_prodi',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function proses_prodi() {
		$this->mprodi->proses_prodi();	
	}
	public function edit_prodi($id_prodi) {
		$this->mprodi->edit_prodi($id_prodi);	
	}
	public function delete_prodi($id_prodi){
		$this->mprodi->delete_prodi($id_prodi);
	}
	//Prodi End.
	//Mahasiswa Start.
	public function mahasiswa()
	{	
		$data1['data_mhs']=$this->mmahasiswa->get_mahasiswa();
		$data1['data_prodi']=$this->mprodi->get_prodi();
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('bem/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('bem/mahasiswa/form_mahasiswa',$data1,TRUE),
			'table'=>$this->load->view('bem/mahasiswa/table_mahasiswa',$data1,TRUE),
		];
		$this->load->view('dashboard',$data);
	}

	public function proses_mahasiswa()
	{
		$this->mmahasiswa->proses_mahasiswa();
	}

	public function edit_mahasiswa($id_mhs)
	{
		$this->mmahasiswa->edit_mahasiswa($id_mhs);
	}

	public function delete_data_mhs($id_mhs){
		$this->mmahasiswa->delete_data_mhs($id_mhs);
	}
	//Mahasiswa End.

	//UKM Start.
	public function ukm() {
		$data1['data_ukm']=$this->mukm->get_masterukm();
		$data1['data_mahasiswa']=$this->mmahasiswa->get_mahasiswa();
		$title['title']= 'UKM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('bem/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('bem/ukm/form_ukm',$data1,TRUE),
			'table'=>$this->load->view('bem/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('dashboard',$data);
	}

	public function proses_ukm()
	{
		$this->mukm->proses_ukm();
	}
	public function edit_ukm($id_ukm)
	{
		$this->mukm->edit_ukm($id_ukm);
	}


	public function delete_ukm($id_ukm){
		$this->mukm->delete_ukm($id_ukm);
	}
	//UKM End.

	//Verifikasi Mahasiswa Start.
	public function verif_mahasiswa()
	{	
		$data1['data_verifmhs']=$this->mdmahasiswa->get_daftafmhs();
		$title['title']= 'Mahasiswa';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('bem/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('bem/verifmhs/form_verifmhs',$data1,TRUE),
			'table'=>$this->load->view('bem/verifmhs/table_verifmhs',$data1,TRUE),
		];
		$this->load->view('dashboard',$data);
	}

	public function verifdatamahasiswa($id_daftar_mahasiswa)
	{
		$this->mdmahasiswa->verifdatamahasiswa($id_daftar_mahasiswa);
	}

	public function proses_verif()
	{
		if ($this->input->post('btn') == 'terima') {
			
			$this->mdmahasiswa->proses_verif_berhasil();
		}else{
			$this->proseshapus($this->input->post('id_daftar_mahasiswa'));
		}
	}
	public function proseshapus($id_mhs){
		$this->mdmahasiswa->proseshapus($id_mhs);
	}
	//Verifikasi Mahasiswa End.

}
?>
