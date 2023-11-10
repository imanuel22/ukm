<?php
class Mlogin extends CI_Model
{
	function prosseslogin() {
		$username=$this->input->post('Username');
		$password=$this->input->post('Password');
		$sql="SELECT * FROM tbdaftar where Email='$username' AND Password='$password'";
		
		$query=$this->db->query($sql);
		if ($query->num_rows()>0) {
			//session
			$data=$query->row();
			$array=array(
				'KodeDaftar'=>$data->KodeDaftar,
				'NamaLengkap'=>$data->NamaLengkap
			);	
			$this->session->set_userdata($array);	
			redirect(base_url('cadmin/aindex'),'refresh');
		}
		else{
			$this->session->set_flashdata('pesan','Login gagal...');
			redirect(base_url('ctampil/login'),'refresh');
		}
	}
}
