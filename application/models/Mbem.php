<?php
class Mbem extends CI_Model{
	//mengambila data ke view bem
	public function get_bem() {
		return $this->db->get('bem')->result();
	}
	//mengambila data ke view bem dari id_mahasiswa = parameter dan level = admin
	public function get_bem_id($id_mahasiswa) {
		return $this->db->get_where('tb_mahasiswa',['id_mahasiswa'=>$id_mahasiswa,'level'=>'admin'])->row();
	}

	//function buat insert + update data 
	public function proses_bem(){
		//data dari form
		$data = [
			'id_mahasiswa' => $this->input->post('id_mahasiswa'),
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'angkatan' => $this->input->post('angkatan'),
			'password'=> password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'no_telp' => $this->input->post('no_telp'),
			'id_prodi' => $this->input->post('id_prodi'),
			'password' => $this->input->post('password'),
			'level' =>'admin',
			'status' => $this->input->post('status'),

		];
		$id_mahasiswa = $data['id_mahasiswa'];
		//cek jika tidak ada id_mahasiswa lakukan insert
		if(empty($id_mahasiswa)){
			//upload img mahasiswa
			$file_name='img-'.$data['nim'];
			$config = [
				'upload_path'=> 'assets/uploads/img_mahasiswa',
				'allowed_types'=>'jpg|jpeg|png',
				'max_size'=>4096000,	
				'file_name'=>$file_name,
				
			];
			$this->load->library('upload',$config);
			$this->upload->do_upload('img_mahasiswa');
			$data['img_mahasiswa']=$this->upload->data('file_name');
			//menambahkan data ke tb_mahasiswa
			$data=['password'=> password_hash($data['password'],PASSWORD_DEFAULT),];

			$this->db->insert('tb_mahasiswa',$data);
			$pesan='Data sudah disimpan';
			$color='success';
		//jika ada id_mahasiswa lakukan update
		}else{
			//cek apakah ada foto yang ingin di ganti
			if(!empty($_FILES['img_mahasiswa']['name'])){
				$file_name='img-'.$data['nim'];
				$config = [
					'upload_path'=> 'assets/uploads/img_mahasiswa',
					'allowed_types'=>'jpg|jpeg|png',
					'max_size'=>4096000,	
					'file_name'=>$file_name,
				];
				$this->load->library('upload',$config);
				
				$target_file ='assets/uploads/img_mahasiswa/'.$this->input->post('img_mahasiswa_old');
				unlink($target_file);
				$this->upload->do_upload('img_mahasiswa');
				$data['img_mahasiswa']=$this->upload->data('file_name');
			//jika tidak pake foto lama
			}else{
				$data['img_mahasiswa']=$this->input->post('img_mahasiswa_old');
			}
			//update tb_mahasiswa dengan id_mahasiswa = $id_mahasiswa
			$this->db->where('id_mahasiswa',$id_mahasiswa);
			$this->db->update('tb_mahasiswa',$data);
			$pesan='Data sudah diedit';
			$color='warning';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('csuperadmin/bem'),'_self');
	}

	//function buat mengisi data ke halaman form
	public function edit_bem($id_mahasiswa){
		//mengambil data ke tb_mahasiswa dari id_mahasiswa sama dengan parameter
		$query = $this->db->get_where('tb_mahasiswa',['id_mahasiswa'=>$id_mahasiswa,'level'=>'admin']);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			//ajax untuk mengirim data ke form byid
			echo "<script>$('#id_mahasiswa').val('".$data->id_mahasiswa."')</script>";
			echo "<script>$('#nim').val('".$data->nim."')</script>";
			echo "<script>$('#nama_mahasiswa').val('".$data->nama_mahasiswa."')</script>";
			echo "<script>$('#angkatan').val('".$data->angkatan."')</script>";
			echo "<script>$('#password').val('".$data->password."')</script>";
			echo "<script>$('#no_telp').val('".$data->no_telp."')</script>";
			echo "<script>$('#img_mahasiswa_old').val('".$data->img_mahasiswa."')</script>";
			echo "<script>$('#img_mahasiswas').attr('src','".base_url()."assets/uploads/img_mahasiswa/".$data->img_mahasiswa."')</script>";
			echo "<script>$('#status').val('".$data->status."')</script>";
			echo "<script>$('#id_prodi').val('".$data->id_prodi."')</script>";
		}	
	}

	//function buat delete 
	public function delete_bem($id_mahasiswa){
		//memangggil function get_bem_id
		$data_mahasiswa=$this->get_bem_id($id_mahasiswa);
		//menghapus foto dari folder 
		$target_file ='assets/uploads/img_mahasiswa/'.$data_mahasiswa->img_mahasiswa;
		unlink($target_file);
		//delete dari tb_mahasiswa dengan id_mahasiswa = $id_mahasiswa
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->delete('tb_mahasiswa');
		$data_mahasiswa = $this->db->affected_rows();
		if($data_mahasiswa>0){
			$this->session->set_flashdata('pesan','data berhasil Terhapus');
			$this->session->set_flashdata('color','success');
		}
		redirect(base_url('csuperadmin/bem'),'_self');
	}
}
?>
