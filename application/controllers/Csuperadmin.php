<?php
class Csuperadmin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mvalidasi');
		$this->mvalidasi->validasisuperadmin();
		$this->load->model('mprodi');
		$this->load->model('mjurusan');
		$this->load->model('mbem');
	}

	public function dashboard() {
		$title['title']= 'Dashboard';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
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
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
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
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
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

	//BEM Start.
	public function bem() {
		$data1['data_bem']=$this->mbem->get_bem();
		$data1['data_prodi']=$this->mprodi->get_prodi();
		$title['title']= 'BEM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/bem/form_bem',$data1,TRUE),
			'table'=>$this->load->view('superadmin/bem/table_bem',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function proses_bem(){
		$this->mbem->proses_bem();
	}
	public function edit_bem($id_mahasiswa){
		$this->mbem->edit_bem($id_mahasiswa);
	}
	public function delete_bem($id_mahasiswa){
		$this->mbem->delete_bem($id_mahasiswa);
	}
	//BEM End.
}
?>
