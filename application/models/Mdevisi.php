<?php 
class mdevisi extends CI_Model{
	//mengambila data ke view daftar_anggotaukm
    public function get_devisi($id_ukm){
        return $this->db->get_where('tb_devisi',['id_ukm'=>$id_ukm])->result();
    }

	//mengambila data ke view daftar_anggotaukm dari id_devisi = $id_devisi
    public function get_devisi_id($id_devisi){
        return $this->db->get_where('tb_devisi',['id_devisi'=>$id_devisi])->row();
    }

	//function buat insert + update data 

    public function proses_devisi()  {
		//data dari form
		
        $data = [
			'id_devisi'=>$this->input->post('id_devisi'),
			'nama_devisi'=>$this->input->post('nama_devisi'),
			'id_ukm'=>$this->input->post('id_ukm'),
		];
		$id_devisi = $data['id_devisi'];
		//cek jika tidak ada id_devisi lakukan insert
		if(empty($id_devisi)){
			//menambahkan data ke tb_devisi
			$this->db->insert('tb_devisi',$data);
			$pesan = 'data berhasil Tertambah';
			$color = 'success';
		}
		//jika ada id_devisi lakukan update
		else{
			//update tb_mahasiswa dengan id_mahasiswa = $id_mahasiswa
			$this->db->where('id_devisi',$id_devisi);
			$this->db->update('tb_devisi',$data);
			$pesan='Data sudah diedit';
			$color='success';
		}
		$this->session->set_flashdata(['pesan'=>$pesan,'color'=>$color]);
		redirect(base_url('cfungsionaris/devisi/').$data['id_ukm'],'_self');
	}

	//function buat mengisi data ke halaman form
	public function edit_devisi($id_devisi){
		//mengambil data ke tb_devisi dari id_devisi sama dengan parameter
		$query = $this->db->get_where('tb_devisi',['id_devisi'=>$id_devisi]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			//ajax untuk mengirim data ke form byid
			echo "<script>$('#id_devisi').val('".$data->id_devisi."')</script>";
			echo "<script>$('#nama_devisi').val('".$data->nama_devisi."')</script>";

		}	
	}
	//function buat delete 
    public function delete_devisi($id_ukm,$id_devisi) {
		//delete dari tb_devisi dengan id_devisi = $id_devisi
        $this->db->where('id_devisi',$id_devisi);
        $this->db->delete('tb_devisi');
        $query = $this->db->affected_rows();
		if($query>0){
			$this->session->set_flashdata('pesan','data berhasil Terhapus');
			$this->session->set_flashdata('color','success');
		}
		redirect(base_url('cfungsionaris/devisi/').$id_ukm,'_self');
    }
}