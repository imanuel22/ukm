<?php
class Mauth extends CI_Model
{
	function proseslogin() {
		//ambil data dari form 
		$nim=$this->input->post('nim');
		$password=$this->input->post('password');

		//cek apakah super admin
		$query=$this->db->get_where('tb_superadmin',['username'=>$nim]);
		if($query->num_rows()>0){
			$data = $query->row_array();
			if(password_verify($password,$data['password'])){
					$array=[
						'id_superadmin'=>$data['id_superadmin'],
						'username'=>$data['username'],
						'email'=>$data['email'],
					];	
					$this->session->set_userdata($array);	
					redirect(base_url('csuperadmin/dashboard'),'refresh');
			}else{
				$this->session->set_flashdata(['pesan'=>'password salah','color'=>'danger']);
				redirect(base_url('cauth/login'),'refresh');
			}
		}
		//cek apakah mahasiswa & bem
		else{
			$query1=$this->db->get_where('tb_mahasiswa',['nim'=>$nim]);
			if($query1->num_rows()>0){
				$data1 = $query1->row_array();
				if(password_verify($password,$data1['password'])){
					$array1=array(
						'id_mahasiswa'=>$data1['id_mahasiswa'],
						'nim'=>$data1['nim'],
						'nama_mahasiswa'=>$data1['nama_mahasiswa'],
						'angkatan'=>$data1['angkatan'],
						'id_prodi'=>$data1['id_prodi'],
						'img_mahasiswa'=>$data1['img_mahasiswa'],
					);	

					$this->session->set_userdata($array1);
					//bem
					if($data1['level']=='admin'){
						redirect(base_url('cbem/dashboard'),'refresh');
					}
					//mahasiswa
					else if($data1['level']=='user'){
						redirect(base_url('cmahasiswa/dashboard'),'refresh');
					}
			
				}
				else{
					$this->session->set_flashdata(['pesan'=>'Password salah','color'=>'danger']);
					redirect(base_url('cauth/login'),'refresh');
				}
			}
			//jika bukan keduanya
			else{
				$this->session->set_flashdata(['pesan'=>'Anda belum punya akun','color'=>'danger']);
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
			'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'no_telp'=>$this->input->post('no_telp'),
			'level'=>'user',
			'img_mahasiswa'=>$this->upload->data('file_name'),
			'status'=>'aktif',
			'id_prodi'=>$this->input->post('id_prodi'),
		];
		$this->db->insert('tb_mahasiswa',$data);
		$this->session->set_flashdata(['pesan'=>'Berhasil Register...','color'=>'success']);
		redirect(base_url('cauth/login'),'refresh');
	}
}
