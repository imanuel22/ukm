<?php

class Cauth extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('mauth');
		$this->load->model('mjurusan');
		$this->load->helper(array('form', 'url'));
		$this->load->model('mprodi');
	}
	public function login(){
		$this->load->view('auth/login');
	}

	public function getprodi() {
		$id_jurusan = $this->input->post('id_jurusan');
		
		$getprodi=$this->mprodi->get_prodi_id_jurusan($id_jurusan);
		echo json_encode($getprodi);
	}



	public function proseslogin(){
		$this->mauth->proseslogin();
	}
	public function register(){
		$data=[
			'data_jurusan'=>$this->mjurusan->get_jurusan(),
		];
		$this->load->view('auth/register',$data);
	}
	public function prosesregister() {
		$this->mauth->prosesregister();
	}
	public function logout() {
		$this->session->sess_destroy();
		$this->login();
	}
}
?>
