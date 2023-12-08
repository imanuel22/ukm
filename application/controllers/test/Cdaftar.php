<?php

class Cdaftar extends CI_Controller{
	public function simpandaftar(){
		$this->load->model('mdaftar');
		$this->mdaftar->simpandaftar();
	}
	public function prosseslogin(){
		$this->load->model('mlogin');
		$this->mlogin->prosseslogin();
	}
}
