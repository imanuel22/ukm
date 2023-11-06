<?php

class Cbem extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mbem');
	}


	//halaman utama
	public function dashboard()
	{	
		$data=[
			'title'=>'Dashboard',
			'konten'=>'',
			'table'=>''
		];
		$this->load->view('bem/dashboard.php',$data);
	}

	//halaman mahasiswa
	public function mahasiswa()
	{	
		$data1['data_mhs']=$this->mbem->getdatamahasiswa();
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data=[
			'title'=>'Data Mahasiswa',
			'konten'=>$this->load->view('bem/mahasiswa/form_mahasiswa_insert',$data1,TRUE),
			'table'=>$this->load->view('bem/mahasiswa/table_mahasiswa',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}

	public function mahasiswa_edit($id_mahasiswa)
	{	
		$data1['data_mhs']=$this->mbem->getdatamahasiswa();
		$data1['data_mhs_where']=$this->mbem->getdatamahasiswawhere($id_mahasiswa);
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data=[
			'title'=>'Data Mahasiswa',
			'konten'=>$this->load->view('bem/mahasiswa/form_mahasiswa_update',$data1,TRUE),
			'table'=>$this->load->view('bem/mahasiswa/table_mahasiswa',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}

	public function insert_data_mhs()
	{
		$this->mbem->insert_data_mhs();
	}

	public function update_data_mhs()
	{
		$this->mbem->update_data_mhs();
	}

	public function delete_data_mhs($id_mhs){
		$this->mbem->delete_data_mhs($id_mhs);
	}

	//halaman jurusan
	public function jurusan() {
		$data1['data_jurusan']=$this->mbem->getdatajurusan();
		$data=[
			'title'=>'Data Jurusan',
			'konten'=>$this->load->view('bem/jurusan/form_jurusan_insert',$data1,TRUE),
			'table'=>$this->load->view('bem/jurusan/table_jurusan',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	public function jurusan_edit($id_jurusan)
	{	
		$data1['data_jurusan']=$this->mbem->getdatajurusan();
		$data1['data_jurusan_where']=$this->mbem->getdatajurusanwhere($id_jurusan);
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data=[
			'title'=>'Data jurusan',
			'konten'=>$this->load->view('bem/jurusan/form_jurusan_update',$data1,TRUE),
			'table'=>$this->load->view('bem/jurusan/table_jurusan',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	public function insert_data_jurusan()
	{
		$this->mbem->insert_data_jurusan();
	}
	public function update_data_jurusan()
	{
		$this->mbem->update_data_jurusan();
	}

	public function delete_data_jurusan($id_jurusan){
		$this->mbem->delete_data_jurusan($id_jurusan);
	}
	//halaman prodi
	public function prodi() {
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data1['data_jurusan']=$this->mbem->getdatajurusan();
		$data=[
			'title'=>'Data prodi',
			'konten'=>$this->load->view('bem/prodi/form_prodi_insert',$data1,TRUE),
			'table'=>$this->load->view('bem/prodi/table_prodi',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	public function prodi_edit($id_prodi)
	{	
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data1['data_prodi_where']=$this->mbem->getdataprodiwhere($id_prodi);
		$data1['data_jurusan']=$this->mbem->getdatajurusan();
		$data=[
			'title'=>'Data prodi',
			'konten'=>$this->load->view('bem/prodi/form_prodi_update',$data1,TRUE),
			'table'=>$this->load->view('bem/prodi/table_prodi',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	public function insert_data_prodi()
	{
		$this->mbem->insert_data_prodi();
	}
	public function update_data_prodi()
	{
		$this->mbem->update_data_prodi();
	}

	public function delete_data_prodi($id_prodi){
		$this->mbem->delete_data_prodi($id_prodi);
	}
	//halaman ukm
	public function ukm() {
		$data1['data_ukm']=$this->mbem->getdataukm();
		$data1['data_mhs_level']=$this->mbem->getdatamahasiswawherel('user');
		$data=[
			'title'=>'Data ukm',
			'konten'=>$this->load->view('bem/ukm/form_ukm_insert',$data1,TRUE),
			'table'=>$this->load->view('bem/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}

	public function insert_data_ukm()
	{
		$this->mbem->insert_data_ukm();
	}

	//verif mhs
	public function verifmhs() {
		$data1['data_verifmhs']=$this->mbem->getdataverifmhs();
		$data=[
			'title'=>'Data verifmhs',
			'konten'=>'',
			'table'=>$this->load->view('bem/verifmhs/table_verifmhs',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}

	public function verifmhs_form($id_daftar_mhs){
		$data1['data_verifmhs']=$this->mbem->getdataverifmhs();
		$data1['datamhs']=$this->mbem->getdataverifmhswhere($id_daftar_mhs);
		$data=[
			'title'=>'Data verifmhs',
			'konten'=>$this->load->view('bem/verifmhs/verifmhs_form',$data1,TRUE),
			'table'=>$this->load->view('bem/verifmhs/table_verifmhs',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	

}
?>
