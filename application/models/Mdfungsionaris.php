<?php

class Mdfungsionaris extends CI_Model{
	public function get_daftar_fungsionaris(){
		return $this->db->get('tb_daftar_fungsionaris')->result();
	}
	public function get_daftar_fungsionaris_id($id_daftar_fungsionaris){
		return $this->db->get_where('tb_daftar_fungsionaris',['id_daftar_fungsionaris'=>$id_daftar_fungsionaris])->row();
	}
    public function get_devisi_id($id_jabatan) {
		return $this->db->get_where('tb_jabatan',['id_jabatan',$id_jabatan])->row();
	}

	public function proses_verif_berhasil(){
		$result = $this->get_devisi_id($this->input->post('id_devisi'));
		$data = [
			'id_mahasiswa'=>$this->input->post('id_mahasiswa'),
			'id_jabatan'=>$this->input->post('id_jabatan'),
			'status'=>'aktif'
		];
		$this->db->insert('tb_fungsionaris',$data);
		$this->proseshapus($this->input->post('id_daftar_fungsionaris'),$result->id_ukm);
	}
	
	public function proseshapus($id_daftar_fungsionaris,$id_ukm){
		$this->db->where('id_daftar_fungsionaris',$id_daftar_fungsionaris);
		$this->db->delete('tb_daftar_fungsionaris');
		redirect(base_url('cfungsionaris/verif_fungsionaris/').$id_ukm,'_self');
	}
}