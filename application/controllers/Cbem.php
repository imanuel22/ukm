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


}
?>
