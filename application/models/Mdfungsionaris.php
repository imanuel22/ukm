<?php

class Mdfungsionaris extends CI_Model{
	//mengambila data ke view daftar_fungsionaris
	public function get_daftar_fungsionaris(){
		return $this->db->get('daftar_fungsionaris')->result();
	}
	//mengambila data ke tb_daftar_fungsionaris dari id_daftar_fungsionaris sama dengan parameter	
	public function get_daftar_fungsionaris_id($id_daftar_fungsionaris){
		return $this->db->get_where('tb_daftar_fungsionaris',['id_daftar_fungsionaris'=>$id_daftar_fungsionaris])->row();
	}
	//mengambila data ke tb_daftar_fungsionaris dari id_jabatan sama dengan parameter	
    public function get_jabatan_id($id_jabatan) {
		return $this->db->get_where('tb_jabatan',['id_jabatan',$id_jabatan])->row();
	}

        //mengirim data ke form 
		public function verifdatafungsionaris($id_daftar_fungsionaris){
        //mengambil data ke daftar_fungsinaris dari id_daftar_fungsionaris sama dengan parameter
		$query = $this->db->get_where('daftar_fungsinaris',['id_daftar_fungsionaris'=>$id_daftar_fungsionaris]);
		if($query->num_rows()>0)
		{
	        //ajax untuk mengirim data ke form byid
			$data=$query->row();
			echo "<script>$('#id_daftar_fungsionaris').val('".$data->id_daftar_fungsionaris."')</script>";
			echo "<script>$('#img_mahasiswas').attr('src','".base_url()."assets/uploads/img_mahasiswa/".$data->img_mahasiswa."')</script>";
			echo "<script>$('#nama_mahasiswa').val('".$data->nama_mahasiswa."')</script>";
			echo "<script>$('#nim').val('".$data->nim."')</script>";
			echo "<script>$('#id_jabatan').val('".$data->id_jabatan."')</script>";
			echo "<script>$('#id_mahasiswa').val('".$data->id_mahasiswa."')</script>";
			echo "<script>$('#nama_jabatan').val('".$data->nama_jabatan."')</script>";
			echo "<script>$('#nama_prodi').val('".$data->nama_prodi."')</script>";
			echo "<script>$('#nama_jurusan').val('".$data->nama_jurusan."')</script>";
			echo "<script>$('#alasan').val('".$data->alasan."')</script>";
		}	
	}

	public function proses_verif_berhasil(){
		$data = [
			'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
			'id_jabatan'=>$this->input->post('id_jabatan'),
			'status'=>'aktif'
		];
		//menambah data ke tb_fungsionaris
		$this->db->insert('tb_fungsionaris',$data);
		//memanggil fungsi hapus
		$this->proseshapus($this->input->post('id_daftar_fungsionaris'),$this->input->post('id_ukm'));
	}
	
	public function proseshapus($id_daftar_fungsionaris,$id_ukm){
		//menghapus data tb_daftar_fungsionaris dengan id_daftar_fungsionaris = $id_daftar_fungsionaris
		$this->db->where('id_daftar_fungsionaris',$id_daftar_fungsionaris);
		$this->db->delete('tb_daftar_fungsionaris');
		redirect(base_url('cfungsionaris/verif_fungsionaris/').$id_ukm,'_self');
	}

	public function daftar_fungsionaris() {
		$data = [
			'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
            'id_jabatan'=>$this->input->post('id_jabatan'),
            'alasan'=>$this->input->post('alasan'),
		];
		//menambah data ke tb_daftar_fungsionaris
		$this->db->insert('tb_daftar_fungsionaris',$data);
		$this->session->set_flashdata(['pesan'=>'Silakan tunggu verifikasi oleh fungsionaris!','color'=>'info']);
		redirect(base_url('cmahasiswa/ukm/').$this->input->post('id_ukm'),'_self');
	}
}
