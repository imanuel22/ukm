<?php 
class Mmahasiswa extends CI_Model{  
    public function get_mahasiswa(){
		return $this->db->get('mahasiswa')->result();
	}
    public function get_mahasiswa_id($id_mahasiswa){
		return$this->db->get_where('tb_mahasiswa',['id_mahasiswa'=>$id_mahasiswa])->row();
	}

	public function proses_mahasiswa(){
		$data = [
			'id_mahasiswa' => $this->input->post('id_mahasiswa'),
			'nim' => $this->input->post('nim'),
			'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
			'angkatan' => $this->input->post('angkatan'),
			'password' => $this->input->post('password'),
			'no_telp' => $this->input->post('no_telp'),
			'id_prodi' => $this->input->post('id_prodi'),
			'level' =>'user',
			'status' => $this->input->post('status'),

		];
		$id_mahasiswa = $data['id_mahasiswa'];
		if(empty($id_mahasiswa)){
			$file_name='img-'.$data['nim'];
			$config = [
				'upload_path'=> 'assets/uploads/img_mahasiswa',
				'allowed_types'=>'jpg|jpeg|png',
				'max_size'=>0,	
				'file_name'=>$file_name,
				
			];
			$this->load->library('upload',$config);
			$this->upload->do_upload('img_mahasiswa');
			$data['img_mahasiswa']=$this->upload->data('file_name');
			$this->db->insert('tb_mahasiswa',$data);
			$pesan='Data sudah disimpan';
			$color='success';
		}else{
			if(!empty($_FILES['img_mahasiswa']['name'])){
				$file_name='img-'.$data['nim'];
				$config = [
					'upload_path'=> 'assets/uploads/img_mahasiswa',
					'allowed_types'=>'jpg|jpeg|png',
					'max_size'=>0,	
					'file_name'=>$file_name,
				];
				$this->load->library('upload',$config);
				$target_file ='assets/uploads/img_mahasiswa/'.$this->input->post('img_mahasiswa_old');
				unlink($target_file);
				$this->upload->do_upload('img_mahasiswa');
				$data['img_mahasiswa']=$this->upload->data('file_name');
			}else{
				$data['img_mahasiswa']=$this->input->post('img_mahasiswa_old');
			}
			$update=array(
				'id_mahasiswa'=>$id_mahasiswa
			);
			$this->db->where($update);
			$this->db->update('tb_mahasiswa',$data);
			$pesan='Data sudah diedit';
			$color='warning';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cbem/mahasiswa'),'_self');
	}
	public function edit_mahasiswa($id_mahasiswa){
		$query = $this->db->get_where('tb_mahasiswa',['id_mahasiswa'=>$id_mahasiswa,'level'=>'user']);
		if($query->num_rows()>0)
		{
			$data=$query->row();
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
	public function delete_data_mhs($id_mahasiswa){
		$this->db->where('id_mahasiswa',$id_mahasiswa);
		$this->db->delete('tb_mahasiswa');
		echo "<script>alert('databas sudah berhasil di simpan');</script>";
		redirect(base_url('cbem/mahasiswa'),'_self');
	}
}