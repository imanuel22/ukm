<?php
class Mjurusan extends CI_Model{
    //mengambila data ke tb_jurusan
	public function get_jurusan() {
		$query = $this->db->get('tb_jurusan');
		return $query->result();
	}
    //mengambila data ke tb_jurusan dari id_jurusan

	public function get_jurusan_id($id_jurusan){
		$this->db->where('id_jurusan',$id_jurusan);
		$query = $this->db->get('tb_jurusan');
		return $query->row();
	}

	//function buat insert + update data 
	public function proses_jurusan(){

		$data=$_POST;
		$id_jurusan=$data['id_jurusan'];
		//cek jika tidak ada id_jurusan lakukan insert
		if(empty($id_jurusan)){
			//menambahkan data ke tb_devisi
			$this->db->insert('tb_jurusan',$data);
			$pesan='Data sudah disimpan';
			$color='success';
		}
				//jika ada id_devisi lakukan update
else{

			//update tb_jurusan dengan id_jurusan = $id_jurusan
			$this->db->where('id_jurusan',$id_jurusan);
			$this->db->update('tb_jurusan',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('csuperadmin/jurusan'),'_self');
	}
	//function buat mengisi data ke halaman form

	public function edit_jurusan($id_jurusan){
		//mengambil data ke tb_jurusan dari id_jurusan sama dengan parameter
		$query = $this->db->get_where('tb_jurusan',['id_jurusan'=>$id_jurusan]);
			if($query->num_rows()>0)
			{
				$data=$query->row();
							//ajax untuk mengirim data ke form byid

				echo "<script>$('#id_jurusan').val('".$data->id_jurusan."')</script>";
				echo "<script>$('#nama_jurusan').val('".$data->nama_jurusan."')</script>";
				echo "<script>$('#NoSKJurusan').val('".$data->NoSKJurusan."')</script>";
				echo "<script>$('#Kajur').val('".$data->Kajur."')</script>";
				echo "<script>$('#keterangan').val('".$data->keterangan."')</script>";
			}	
	}	//function buat delete 

	public function delete_jurusan($id_jurusan){
		//delete dari tb_jurusan dengan id_jurusan = $id_jurusan
		$this->db->where('id_jurusan',$id_jurusan);
		$this->db->delete('tb_jurusan');
		$this->session->set_flashdata(['pesan'=>'data berhasil Terhapus','color'=>'success']);
		redirect(base_url('csuperadmin/jurusan'),'_self');
	}

	
}
