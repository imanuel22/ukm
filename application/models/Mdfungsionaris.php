<?php

class Mdfungsionaris extends CI_Model{
	public function get_daftar_fungsionaris(){
		return $this->db->get('daftar_fungsinaris')->result();
	}
	public function get_daftar_fungsionaris_id($id_daftar_fungsionaris){
		return $this->db->get_where('tb_daftar_fungsionaris',['id_daftar_fungsionaris'=>$id_daftar_fungsionaris])->row();
	}
    public function get_jabatan_id($id_jabatan) {
		return $this->db->get_where('tb_jabatan',['id_jabatan',$id_jabatan])->row();
	}

	public function verifdatafungsionaris($id_daftar_fungsionaris){
		$query = $this->db->get_where('daftar_fungsinaris',['id_daftar_fungsionaris'=>$id_daftar_fungsionaris]);
		if($query->num_rows()>0)
		{
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
		$this->db->insert('tb_fungsionaris',$data);
		$this->proseshapus($this->input->post('id_daftar_fungsionaris'),$this->input->post('id_ukm'));
	}
	
	public function proseshapus($id_daftar_fungsionaris,$id_ukm){
		$this->db->where('id_daftar_fungsionaris',$id_daftar_fungsionaris);
		$this->db->delete('tb_daftar_fungsionaris');
		redirect(base_url('cfungsionaris/verif_fungsionaris/').$id_ukm,'_self');
	}
}