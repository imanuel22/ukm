<?php
class Mauth extends CI_Model
{
	//function buat login
	function proseslogin() {
		//ambil data dari form 
		$nim=$this->input->post('nim');
		$password=$this->input->post('password');

        //mengambila data ke tb_superadmin dari username sama dengan parameter
		$query=$this->db->get_where('tb_superadmin',['username'=>$nim]);
		//cek jika ada data di tb_superadmin
		if($query->num_rows()>0){
			$data = $query->row_array();
			//cek apakah password sama yang di inputkan dengan yang di database
			if(password_verify($password,$data['password'])){
				//isi data session
					$array=[
						'id_superadmin'=>$data['id_superadmin'],
						'username'=>$data['username'],
						'email'=>$data['email'],
					];	
					$this->session->set_userdata($array);	
					redirect(base_url('csuperadmin/dashboard'),'refresh');
			//jika password tidak sama yang di inputkan dengan yang di database
			}else{
				$this->session->set_flashdata(['pesan'=>'password salah','color'=>'danger']);
				redirect(base_url('cauth/login'),'refresh');
			}
		}
		//jika tidak ada data di tb_superadmin
		else{
			//mengambila data ke tb_mahasiswa dari nim sama dengan parameter
			$query1=$this->db->get_where('tb_mahasiswa',['nim'=>$nim]);
			//cek jika ada data di tb_superadmin
			if($query1->num_rows()>0){
				$data1 = $query1->row_array();
				//cek apakah password sama yang di inputkan dengan yang di database
				if(password_verify($password,$data1['password'])){
					//isi data session
					$array1=array(
						'id_mahasiswa'=>$data1['id_mahasiswa'],
						'nim'=>$data1['nim'],
						'nama_mahasiswa'=>$data1['nama_mahasiswa'],
						'angkatan'=>$data1['angkatan'],
						'id_prodi'=>$data1['id_prodi'],
						'img_mahasiswa'=>$data1['img_mahasiswa'],
					);	
					$this->session->set_userdata($array1);
					
					//cek apakah mahasiswa & bem
					//bem
					if($data1['level']=='admin'){
						redirect(base_url('cbem/dashboard'),'refresh');
					}
					//mahasiswa
					else if($data1['level']=='user'){
						redirect(base_url('cmahasiswa/dashboard'),'refresh');
					}
			
				}
				//jika password tidak sama yang di inputkan dengan yang di database
				else{
					$this->session->set_flashdata(['pesan'=>'Password salah','color'=>'danger']);
					redirect(base_url('cauth/login'),'refresh');
				}
			}
			//jika bukan superadmin || bem || mahasiswa
			else{
				$this->session->set_flashdata(['pesan'=>'Anda belum punya akun','color'=>'danger']);
				redirect(base_url('cauth/login'),'refresh');
			}
		}
	}	

	//fungsion buat register
	public function prosesregister() {
		$this->load->library('upload');
		
		//upload foto mhs
		$namafile='img-'.$this->input->post('nim');
		$config = [
			'upload_path'=> 'assets/uploads/img_mahasiswa',
			'allowed_types'=>'jpg|jpeg|png',
			'max_size'=>4096000,	
			'file_name'=>$namafile,
		];
		$this->upload->initialize($config);
		$this->upload->do_upload('img_mahasiswa');
		$img_mahasiswa=$this->upload->data('file_name');
		
		//upload foto ktm
		$namafile1='ktm-'.$this->input->post('nim');
		$config1 = [
			'upload_path'=> 'assets/uploads/img_ktm',
			'allowed_types'=>'jpg|jpeg|png',
			'max_size'=>0,	
			'file_name'=>$namafile1,
		];
		$this->upload->initialize($config1);
		$this->upload->do_upload('img_ktm');
		$img_ktm=$this->upload->data('file_name');
		
		//data yang bakal di tambahkan ke tb_daftar_mahasiswa
		$data = [
			'nim'=>$this->input->post('nim'),
			'nama_mahasiswa'=>$this->input->post('nama_mahasiswa'),
			'angkatan '=>$this->input->post('angkatan'),
			'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'no_telp'=>$this->input->post('no_telp'),
			'id_prodi'=>$this->input->post('id_prodi'),
			'img_mahasiswa'=>$img_mahasiswa,
			'img_ktm'=>$img_ktm,
		];
		//menambahkan data ke tb_daftar_mahasiswa
		$this->db->insert('tb_daftar_mahasiswa',$data);
		$this->session->set_flashdata(['pesan'=>'Berhasil Register silakan tunggu Verifikasi	','color'=>'success']);
		redirect(base_url('cauth/login'),'refresh');
	}
}
