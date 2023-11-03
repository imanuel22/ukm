<?php

class Cbem extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mbem');
	}

	public function dashboard()
	{	
		$data=[
			'title'=>'dashboard',
			'konten'=>'',
			'table'=>''
		];
		$this->load->view('bem/home.php');
	}
	
	public function mahasiswa()
	{	
		$data1['data_mhs']=$this->mbem->getdatamahasiswa();
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data=[
			'title'=>'dashboard',
			'konten'=>$this->load->view('bem/mahasiswa/form_mahasiswa_insert',$data1,TRUE),
			'table'=>$this->load->view('bem/mahasiswa/table_mahasiswa',$data1,TRUE),
		];
		$this->load->view('bem/home.php',$data);
	}

	public function mahasiswa_edit($id_mahasiswa)
	{	
		$data1['data_mhs']=$this->mbem->getdatamahasiswa();
		$data1['data_mhs_where']=$this->mbem->getdatamahasiswawhere($id_mahasiswa);
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data=[
			'title'=>'dashboard',
			'konten'=>$this->load->view('bem/mahasiswa/form_mahasiswa_update',$data1,TRUE),
			'table'=>$this->load->view('bem/mahasiswa/table_mahasiswa',$data1,TRUE),
		];
		$this->load->view('bem/home.php',$data);
	}

	public function insert_data_mhs()
	{
		$this->mbem->insert_data_mhs();
	}

	public function update_data_mhs()
	{
		$this->mbem->update_data_mhs();
	}

	public function delete_data_mhs($id_ukm){
		$this->mbem->delete_data_mhs($id_ukm);
	}

}
?>
