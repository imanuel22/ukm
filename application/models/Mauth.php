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
		//cek apaka mahasiswa & bem
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
				//bem
				if($data->level=='admin'){
					redirect(base_url('cbem/dashboard'),'refresh');
				}
				//mahasiswa
				else if($data->level=='user'){
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
		$namafile='img-'.$this->input->post('nim');
		$config = [
			'upload_path'=> 'assets/uploads/img_mahasiswa',
			'allowed_types'=>'jpg|jpeg|png',
			'max_size'=>0,	
			'file_name'=>$namafile,
		];
		$this->load->library('upload',$config);
		$this->upload->do_upload('img_mahasiswa');
		$data = [
			'nim'=>$this->input->post('nim'),
			'nama_mahasiswa'=>$this->input->post('nama_mahasiswa'),
			'angkatan '=>$this->input->post('angkatan'),
			'password'=>$this->input->post('password'),
			'no_telp'=>$this->input->post('no_telp'),
			'level'=>'user',
			'img_mahasiswa'=>$this->upload->data('file_name'),
			'status'=>'aktif',
			'id_prodi'=>$this->input->post('id_prodi'),
		];
		$this->db->insert('tb_mahasiswa',$data);
		$this->session->set_flashdata('pesan','Login berhasil...');
		redirect(base_url('cauth/login'),'refresh');
	}
}