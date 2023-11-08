<?php
class Csuperadmin extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mbem');
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
		$data1['data_jurusan']=$this->mbem->getdatajurusan();
		$data = [
			'title'=>'jurusan',
			'konten'=>'',
			'table'=>$this->load->view('superadmin/jurusan/table_jurusan',$data1,TRUE),
			];
		$this->load->view('superadmin/dashboard',$data);
	}

}
?>
