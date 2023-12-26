<?php

class Mdanggota extends CI_Model{
    public function get_daftar_anggota(){
		return $this->db->get('daftar_anggotaukm')->result();
	}
	public function get_daftar_anggota_id($id_daftar_anggota){
		return $this->db->get_where('tb_daftar_anggota',['id_daftar_anggota'=>$id_daftar_anggota])->row();
	}
    public function get_devisi_id($id_devisi) {
		return $this->db->get_where('tb_devisi',['id_devisi',$id_devisi])->row();
	}

	public function verifdataanggota($id_daftar_anggota){
		$query = $this->db->get_where('daftar_anggotaukm',['id_daftar_anggota'=>$id_daftar_anggota]);
		if($query->num_rows()>0)
		{
			$data=$query->row();
			echo "<script>$('#id_daftar_anggota').val('".$data->id_daftar_anggota."')</script>";
			echo "<script>$('#img_mahasiswas').attr('src','".base_url()."assets/uploads/img_mahasiswa/".$data->img_mahasiswa."')</script>";
			echo "<script>$('#nama_mahasiswa').val('".$data->nama_mahasiswa."')</script>";
			echo "<script>$('#nim').val('".$data->nim."')</script>";
			echo "<script>$('#id_devisi').val('".$data->id_devisi."')</script>";
			echo "<script>$('#id_mahasiswa').val('".$data->id_mahasiswa."')</script>";
			echo "<script>$('#nama_devisi').val('".$data->nama_devisi."')</script>";
			echo "<script>$('#nama_prodi').val('".$data->nama_prodi."')</script>";
			echo "<script>$('#nama_jurusan').val('".$data->nama_jurusan."')</script>";
			echo "<script>$('#alasan').val('".$data->alasan."')</script>";
		}	
	}

	public function proses_verif_berhasil(){
		$data = [
			'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
			'id_devisi'=>$this->input->post('id_devisi'),
			'status'=>'aktif'
		];
		$this->db->insert('tb_anggota_ukm',$data);
		$this->proseshapus($this->input->post('id_daftar_anggota'),$this->input->post('id_ukm'));
	}
	
	public function proseshapus($id_daftar_anggota,$id_ukm){
		$this->db->where('id_daftar_anggota',$id_daftar_anggota);
		$this->db->delete('tb_daftar_anggota');
		redirect(base_url('cfungsionaris/verif_anggota/').$id_ukm,'_self');
	}
	public function daftar_anggota() {
		$data = [
			'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
            'id_devisi'=>$this->input->post('id_devisi'),
            'alasan'=>$this->input->post('alasan'),
		];
		$this->db->insert('tb_daftar_anggota',$data);
		$this->session->set_flashdata(['pesan'=>'Silakan Mengunggu diverifikasi oleh fungsionaris!','color'=>'info']);
		redirect(base_url('cmahasiswa/ukm/').$this->input->post('id_ukm'),'_self');
	}

}