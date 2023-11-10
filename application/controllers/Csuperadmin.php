<?php
class Csuperadmin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mvalidasiadmin');
		$this->mvalidasiadmin->validasi();
		$this->load->model('msuperadmin');
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('cadmin/login','refresh');	
	}

	public function dashboard() {
		$data = [
			'title'=>'Dashboard',
			'konten'=>'',
			'table'=>'',
			];

		$this->load->view('superadmin/dashboard',$data);
	}
	public function jurusan() {
		$data1['data_jurusan']=$this->msuperadmin->getdatajurusan();
		$data = [
			'title'=>'jurusan',
			'konten'=>'',
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function tambah_jurusan() {
		$data1['data_jurusan']=$this->msuperadmin->getdatajurusan();
		$data = [
			'title'=>'jurusan',
			'konten'=>$this->load->view('superadmin/jurusan/form_jurusan_insert','',TRUE),
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function edit_jurusan($id) {
		$data1['data_jurusan']=$this->msuperadmin->getdatajurusan();
		$data1['data_jurusan_id']=$this->msuperadmin->getdatajurusan_id($id);
		$data = [
			'title'=>'jurusan',
			'konten'=>$this->load->view('superadmin/jurusan/form_jurusan_update',$data1,TRUE),
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function insert_data_jurusan(){
		$this->msuperadmin->insert_data_jurusan();
	}
	public function update_data_jurusan(){
		$this->msuperadmin->update_data_jurusan();
	}
	public function delete_data_jurusan($id){
		$this->msuperadmin->delete_data_jurusan($id);
	}

	//prodi
	public function prodi() {
		$data1['data_prodi']=$this->msuperadmin->getdataprodi();
		$data = [
			'title'=>'prodi',
			'konten'=>'',
			'table'=>$this->load->view('superadmin/prodi/table_prodi',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function tambah_prodi() {
		$data1['data_prodi']=$this->msuperadmin->getdataprodi();
		$data1['data_jurusan']=$this->msuperadmin->getdatajurusan();
		$data = [
			'title'=>'prodi',
			'konten'=>$this->load->view('superadmin/prodi/form_prodi_insert',$data1,TRUE),
			'table'=>$this->load->view('superadmin/prodi/table_prodi',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function edit_prodi($id) {
		$data1['data_prodi']=$this->msuperadmin->getdataprodi();
		$data1['data_jurusan']=$this->msuperadmin->getdatajurusan();
		$data1['data_prodi_id']=$this->msuperadmin->getdataprodi_id($id);
		$data = [
			'title'=>'prodi',
			'konten'=>$this->load->view('superadmin/prodi/form_prodi_update',$data1,TRUE),
			'table'=>$this->load->view('superadmin/prodi/table_prodi',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function insert_data_prodi(){
		$this->msuperadmin->insert_data_prodi();
	}
	public function update_data_prodi(){
		$this->msuperadmin->update_data_prodi();
	}
	public function delete_data_prodi($id){
		$this->msuperadmin->delete_data_prodi($id);
	}

	public function bem() {
		$data1['data_bem']=$this->msuperadmin->getdatabem();
		$data = [
			'title'=>'bem',
			'konten'=>'',
			'table'=>$this->load->view('superadmin/bem/table_bem',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function tambah_bem() {
		$data1['data_bem']=$this->msuperadmin->getdatabem();
		$data1['data_prodi']=$this->msuperadmin->getdataprodi();

		$data = [
			'title'=>'bem',
			'konten'=>$this->load->view('superadmin/bem/form_bem_insert',$data1,TRUE),
			'table'=>$this->load->view('superadmin/bem/table_bem',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function edit_bem($id) {
		$data1['data_bem']=$this->msuperadmin->getdatabem();
		$data1['data_prodi']=$this->msuperadmin->getdataprodi();
		$data1['data_bem_id']=$this->msuperadmin->getdatabem_id($id);
		$data = [
			'title'=>'bem',
			'konten'=>$this->load->view('superadmin/bem/form_bem_update',$data1,TRUE),
			'table'=>$this->load->view('superadmin/bem/table_bem',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}
	public function insert_data_bem(){
		$this->msuperadmin->insert_data_bem();
	}
	public function update_data_bem(){
		$this->msuperadmin->update_data_bem();
	}
	public function delete_data_bem($id){
		$this->msuperadmin->delete_data_bem($id);
	}
}
?>
