<?php
class Mauth extends CI_Model
{
	
	function proseslogin() {
		//ambil data dari form 
		$nim=$this->input->post('nim');
		$password=$this->input->post('password');
		//cek apakah supper admin
		$query=$this->db->get_where('tb_superadmin',['username'=>$nim,'password'=>$password]);
		if ($query->num_rows()>0) {
			$data=$query->row();
			$array=[
				'id_superadmin'=>$data->id_superadmin,
				'username'=>$data->username,
				'email'=>$data->email,
			];	
			$this->session->set_userdata($array);	
			redirect(base_url('csuperadmin/dashboard'),'refresh');
		}
		//cek apaka mahasiswa
		else{
			$query1=$this->db->get_where('tb_mahasiswa',['nim'=>$nim,'password'=>$password]);
			if ($query1->num_rows()>0) {
				$data=$query1->row();
				$array=array(
					'id_mahasiswa'=>$data->id_mahasiswa,
					'nim'=>$data->nim,
					'nama_mahasiswa'=>$data->nama_mahasiswa,
					'angkatan'=>$data->angkatan,
					'id_prodi'=>$data->id_prodi,
				);	
				$this->session->set_userdata($array);
				if($data->level=='admin'){
					redirect(base_url('cbem/dashboard'),'refresh');
				}else if($data->level=='user'){
					redirect(base_url('cmahasiswa/dashboard'),'refresh');
				}
			}
			//jika bukan keduanya
			else{
				$this->session->set_flashdata('pesan','Login gagal...');
				redirect(base_url('cauth/login'),'refresh');
			}
		}
	}	
	public function prosesregister() {
		$this->load->library('upload');
		$config = [
			'upload_path'=> 'assets/upload/',
			'allowed_types'=>'jpg|jpeg|png',
			'max_size'=>0,
			'filename'=> url_title($this->input->post('img_mahasiswa')),
		];
		$this->upload->initialize($config);
		$this->upload->do_upload('img_mahasiswa');
		$img_ktm_data = $this->upload->data();
		$data['img_mahasiswa'] = $img_ktm_data['file_name'];
		$config = [
			'upload_path'=> 'assets/upload/',
			'allowed_types'=>'jpg|jpeg|png',
			'max_size'=>0,
			'filename'=> url_title($this->input->post('img_ktm')),
		];
		$this->upload->initialize($config);
		$this->upload->do_upload('img_ktm');
		$img_ktm_data = $this->upload->data();
		$data['img_ktm'] = $img_ktm_data['file_name'];
		$data = $_POST;
		$data['img_ktm'];
		$this->db->insert('tb_daftar_mahasiswa',$data);
			$this->session->set_flashdata('pesan','Login berhasil...');
		// redirect(base_url('cauth/login'),'refresh');
	}
}