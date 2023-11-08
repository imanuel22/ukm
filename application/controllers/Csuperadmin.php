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

}
?>
