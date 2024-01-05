<?php 
class Mproker extends CI_Model{
	//mengambila data ke tb_proker
    public function get_proker($id_ukm) {
        return $this->db->get_where('tb_proker',['id_ukm'=>$id_ukm])->result();
    }
	//mengambila data ke tb_proker dari id_proker = parameter 
    public function get_proker_id($id_proker) {
        return $this->db->get_where('tb_proker',['id_proker'=>$id_proker])->row();
    }

	
	//function buat insert + update data 
    public function proses_proker()  {
		$data = [
			'id_proker'=>$this->input->post('id_proker'),
			'nama_proker'=>$this->input->post('nama_proker'),
			'deskripsi'=>$this->input->post('deskripsi'),
			'peraturan'=>$this->input->post('peraturan'),
			'id_ukm'=>$this->input->post('id_ukm'),
		];
		$id_proker = $data['id_proker'];
		//cek jika tidak ada id_proker lakukan insert
		if(empty($id_proker)){
						//upload img mahasiswa
			$file_name='img-'.$data['nama_proker'];
			$config = [
				'upload_path'=> 'assets/uploads/img_proker',
				'allowed_types'=>'jpg|jpeg|png',
				'max_size'=>0,	
				'file_name'=>$file_name,
			];
			$this->load->library('upload',$config);
			$this->upload->do_upload('img_proker');
			$data['img_proker']=$this->upload->data('file_name');
			//menambahkan data ke tb_proker

			$this->db->insert('tb_proker',$data);
			$pesan = 'data berhasil Tertambah';
			$color = 'success';
		}else{
			//cek apakah ada foto yang ingin di ganti
			if(!empty($_FILES['img_proker']['name'])){
				$file_name='img-'.$data['nim'];
				$config = [
					'upload_path'=> 'assets/uploads/img_proker',
					'allowed_types'=>'jpg|jpeg|png',
					'max_size'=>0,	
					'file_name'=>$file_name,
				];
				$this->load->library('upload',$config);
				
				$target_file ='assets/uploads/img_proker/'.$this->input->post('img_proker_old');
				unlink($target_file);
				$this->upload->do_upload('img_proker');
				$data['img_proker']=$this->upload->data('file_name');
			//jika tidak pake foto lama
			}else{
				$data['img_proker']=$this->input->post('img_proker_old');
			}			
			//update tb_proker dengan id_proker = $id_proker
			$this->db->where('id_proker',$id_proker);
			$this->db->update('tb_proker',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cfungsionaris/proker/').$data['id_ukm'],'_self');
	}


		//function buat mengisi data ke halaman form

	public function edit_proker($id_proker){
		//mengambil data ke tb_proker dari id_proker sama dengan parameter
		$query = $this->db->get_where('tb_proker',['id_proker'=>$id_proker]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			//ajax untuk mengirim data ke form byid
			echo "<script>$('#id_proker').val('".$data->id_proker."')</script>";
			echo "<script>$('#img_proker').val('".$data->img_proker."')</script>";
			echo "<script>$('#nama_proker').val('".$data->nama_proker."')</script>";
			echo "<script>$('#deskripsi').val('".$data->deskripsi."')</script>";
			echo "<script>$('#peraturan').val('".$data->peraturan."')</script>";

		}	
	}
	//function buat delete 
    public function delete_proker($id_ukm,$id_proker) {
		//memangggil function get_bem_id
		$data_proker=$this->get_proker_id($id_proker);
		//menghapus foto dari folder 
		$target_file ='assets/uploads/img_proker/'.$data_proker->img_proker;
		unlink($target_file);        
		//delete dari tb_proker dengan id_proker = $id_proker
		$this->db->where('id_proker',$id_proker);
        $this->db->delete('tb_proker');
        $query = $this->db->affected_rows();
        if($query>0){
            $this->session->set_flashdata('pesan','data berhasil Tersimpan');
            $this->session->set_flashdata('color','success');
        }
        redirect(base_url('cfungsionaris/proker/').$id_ukm,'_self');
    }
}