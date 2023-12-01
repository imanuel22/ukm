<?php
class Madmin extends CI_Model
{
	function login_proses() {
		$data=$_POST;
		$query=$this->db->get_where('tb_superadmin',['username'=>$data['username'],'password'=>$data['password']]);
		$result = $this->db->affected_rows();
		if ($result>0) {
			//session
			

		}
		else{
			$data1=['pesan'=>"login gagal",'color'=>'danger'];
			$this->session->set_flashdata($data1);
			redirect(base_url('cadmin/login'),'refresh');
		}
	}
}
