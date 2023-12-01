<?php

class Cbem extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mvalidasi');
		$this->mvalidasi->validasi();
		
		$this->load->model('mdm');
		$this->load->model('mmahasiswa');
		$this->load->model('mjurusan');
		$this->load->model('mprodi');
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

	//coba
	function getdataprodi() {
		$id_jurusan = $this->input->post('jurusan');
		$getdataprodi = $this->mbem->getdataprodiwherejurusan($id_jurusan);
		var_dump($getdataprodi);
	}

	//halaman mahasiswa
	public function mahasiswa()
	{	
		$data1['data_mhs']=$this->mmahasiswa->get_mahasiswa();
		$data1['data_prodi']=$this->mprodi->get_prodi();
		$data=[
			'title'=>'Data Mahasiswa',
			'konten'=>'',
			'table'=>$this->load->view('bem/mahasiswa/table_mahasiswa',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	public function mahasiswa_tambah()
	{	
		$data1['data_mhs']=$this->mbem->getdatamahasiswa();
		$data1['data_prodi']=$this->mbem->getdataprodi();
		$data1['data_jurusan']=$this->mbem->getdatajurusan();
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

	//halaman ukm
	public function ukm() {
		$data1['data_ukm']=$this->mbem->getdataukm();
		$data1['data_mhs_level']=$this->mbem->getdatamahasiswawherel('user');
		$data=[
			'title'=>'Data ukm',
			'konten'=>'',
			'table'=>$this->load->view('bem/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	public function ukm_tambah() {
		$data1['data_ukm']=$this->mbem->getdataukm();
		$data1['data_mhs_level']=$this->mbem->getdatamahasiswawherel('user');
		$data=[
			'title'=>'Data ukm',
			'konten'=>$this->load->view('bem/ukm/form_ukm_insert',$data1,TRUE),
			'table'=>$this->load->view('bem/ukm/table_ukm',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	public function ukm_edit() {
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
	public function delete_data_ukm($id_ukm){
		$this->mbem->delete_data_ukm($id_ukm);
	}



	//verif mhs
	public function verifmhs() {
		$data1['data_verifmhs']=$this->mdm->get_daftafmhs();
		$data=[
			'title'=>'Data verifmhs',
			'konten'=>'',
			'table'=>$this->load->view('bem/verifmhs/table_verifmhs',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}

	public function verifmhs_form($id_daftar_mhs){
		$data1['data_verifmhs']=$this->mdm->get_daftafmhs();
		$data1['datamhs']=$this->mdm->get_daftarmhs_id($id_daftar_mhs);
		$data=[
			'title'=>'Data verifmhs',
			'konten'=>$this->load->view('bem/verifmhs/verifmhs_form',$data1,TRUE),
			'table'=>$this->load->view('bem/verifmhs/table_verifmhs',$data1,TRUE),
		];
		$this->load->view('bem/dashboard.php',$data);
	}
	
	public function proses_verif(){
		if($this->input->post('status')=='terima'){
		$this->mdm->proses_verif_berhasil();
		}else{
		$this->mdm->proses_verif_gagal();}
	}
	public function proseshapus($id){
		$this->mdm->proseshapus($id);
	}
}
?>
