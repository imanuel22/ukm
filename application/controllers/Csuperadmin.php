<?php
class Csuperadmin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mvalidasi');
		$this->mvalidasi->validasi();
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
	
	public function jurusan() {
		$data1['data_jurusan']=$this->mjurusan->get_jurusan();
		$title['title']= 'Jurusan';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function tambah_jurusan() {
		$data1['data_jurusan']=$this->mjurusan->get_jurusan();
		$title['title']= 'Jurusan';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/jurusan/form_jurusan_insert','',TRUE),
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function edit_jurusan($id) {
		$data1['data_jurusan']=$this->mjurusan->get_jurusan();
		$data1['data_jurusan_id']=$this->mjurusan->get_jurusan_id($id);
		$title['title']= 'Jurusan';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/jurusan/form_jurusan_update',$data1,TRUE),
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function insert_jurusan(){
		$this->mjurusan->insert_jurusan();
	}
	public function update_jurusan(){
		$this->mjurusan->update_jurusan();
	}
	public function delete_jurusan($id){
		$this->mjurusan->delete_jurusan($id);
	}

	//prodi
	public function prodi() {
		$data1['data_prodi']=$this->mprodi->view_prodi();
		$title['title']= 'Prodi';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('superadmin/prodi/table_prodi',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function tambah_prodi() {
		$data1['data_prodi']=$this->mprodi->view_prodi();
		$data1['data_jurusan']=$this->mjurusan->get_jurusan();
		$title['title']= 'Prodi';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/prodi/form_prodi_insert',$data1,TRUE),
			'table'=>$this->load->view('superadmin/prodi/table_prodi',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function edit_prodi($id) {
		$data1['data_prodi']=$this->mprodi->view_prodi();
		$data1['data_jurusan']=$this->mjurusan->get_jurusan();
		$data1['data_prodi_id']=$this->mprodi->get_prodi_id($id);
		$title['title']= 'Prodi';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/prodi/form_prodi_update',$data1,TRUE),
			'table'=>$this->load->view('superadmin/prodi/table_prodi',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function insert_prodi(){
		$this->mprodi->insert_prodi();
	}
	public function update_prodi(){
		$this->mprodi->update_prodi();
	}
	public function delete_prodi($id){
		$this->mprodi->delete_prodi($id);
	}

	public function bem() {
		$data1['data_bem']=$this->mbem->get_bem();
		$title['title']= 'BEM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>'',
			'table'=>$this->load->view('superadmin/bem/table_bem',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function tambah_bem() {
		$data1['data_bem']=$this->mbem->get_bem();
		$data1['data_prodi']=$this->mprodi->get_prodi();

		$title['title']= 'BEM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/bem/form_bem_insert',$data1,TRUE),
			'table'=>$this->load->view('superadmin/bem/table_bem',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function edit_bem($id) {
		$data1['data_bem']=$this->mbem->get_bem();
		$data1['data_prodi']=$this->mprodi->get_prodi();
		$data1['data_bem_id']=$this->mbem->get_bem_id($id);
		$title['title']= 'BEM';
		$data = [
			'header'=>$this->load->view('partial/header',$title,true),
			'sitebar'=>$this->load->view('superadmin/partial/sitebar','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
			'konten'=>$this->load->view('superadmin/bem/form_bem_update',$data1,TRUE),
			'table'=>$this->load->view('superadmin/bem/table_bem',$data1,TRUE),
			];
		$this->load->view('dashboard',$data);
	}
	public function insert_bem(){
		$this->mbem->insert_bem();
	}
	public function update_bem(){
		$this->mbem->update_bem();
	}
	public function delete_bem($id){
		$this->mbem->delete_bem($id);
	}
}
?>
