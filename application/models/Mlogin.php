<?php
class Mlogin extends CI_Model
{
	function proseslogin() {
		$nim=$this->input->post('nim');
		$password=$this->input->post('password');
		$sql="SELECT * FROM tb_mahasiswa where nim='$nim' AND password='$password'";
		
		$query=$this->db->query($sql);
		if ($query->num_rows()>0) {
			//session
			$data=$query->row();
			$array=array(
				'id_mahasiswa'=>$data->id_mahasiswa,
				'nim'=>$data->nim,
				'nama_mahasiswa'=>$data->nama_mahasiswa
			);	
			$this->session->set_userdata($array);
			//bem
			if($data->level=="admin"){
				redirect(base_url('cbem/dashboard'),'refresh');
			}
			//mahasiswa
			else{
				redirect(base_url('cmahasiswa/dashboard'),'refresh');
			}
		}
		else{
			$this->session->set_flashdata('pesan','Login gagal...');
			redirect(base_url('ctampil/login'),'refresh');
		}
	}
}
