<?php

class Mdfungsionaris extends CI_Model{
    public function get_daftar_fungsionaris(){
		return $this->db->get('tb_daftar_fungsionaris')->result();
	}
	public function get_daftar_fungsionaris_id($id_daftar_fungsionaris){
		return $this->db->get_where('tb_daftar_fungsionaris',['id_daftar_fungsionaris'=>$id_daftar_fungsionaris])->row();
	}
    public function get_daftar_fungsionaris_nim($nim) {
		return $this->db->get_where('tb_daftar_fungsionaris',['nim_mahasiswa',$nim])->row();
	}

	public function proses_verif_berhasil(){
		$data = $_POST;
		$data['status']='aktif';
		$data['level']='user';
		$this->db->insert('tb_fungsionaris',$data);
		$query = $this->get_daftar_fungsionaris_nim($data['nim']);
		$id_daftar_fungsionaris1 = $query->id_daftar_fungsionaris;
		$this->proseshapus($id_daftar_fungsionaris1);
	}
	public function proses_verif_gagal(){
		$data =$_POST;
		$query = $this->get_daftar_fungsionaris_nim($data['nim']);
		$id_daftar_fungsionaris1 = $query->id_daftar_fungsionaris;
		$this->proseshapus($id_daftar_fungsionaris1);
	}
	public function proseshapus($id_daftar_fungsionaris){
		$this->db->where('id_daftar_fungsionaris',$id_daftar_fungsionaris);
		$this->db->delete('tb_daftar_fungsionaris');
		redirect(base_url('cbem/verifmhs'),'_self');
	}
}