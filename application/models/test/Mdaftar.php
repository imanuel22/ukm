<?php
	class Mdaftar extends CI_Model{
		function buatpassword(){
			$kata="ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
			$Password=substr(str_shuffle($kata),0,8);
			return $Password;
		}
		function simpandaftar(){
			$NamaLengkap =  $this->input->post('NamaLengkap');
			$Password =  $this->buatpassword();
			$Alamat =  $this->input->post('Alamat');
			$Telp =  $this->input->post('Telp');
			$Email =  $this->input->post('Email');

			$data= array(
				'NamaLengkap'=>$NamaLengkap,
				'Password'=>$Password,
				'Alamat'=>$Alamat,
				'Telp'=>$Telp,
				'Email'=>$Email
			);

			$this->db->insert('tbdaftar',$data);
			echo "<script>alert('databas sudah berhasil di simpan');</script>";
			redirect('ctampil/daftar','refresh');
		}
	}
