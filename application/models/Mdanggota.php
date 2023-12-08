<?php

class Mdanggota extends CI_Model{
    public function get_daftar_anggota(){
		return $this->db->get('tb_daftar_anggota')->result();
	}
	public function get_daftar_anggota_id($id_daftar_anggota){
		return $this->db->get_where('tb_daftar_anggota',['id_daftar_anggota'=>$id_daftar_anggota])->row();
	}
    public function get_daftar_anggota_nim($nim) {
		return $this->db->get_where('tb_daftar_anggota',['nim_mahasiswa',$nim])->row();
	}

	public function proses_verif_berhasil(){
		$data = $_POST;
		$data['status']='aktif';
		$data['level']='user';
		$this->db->insert('tb_anggota_ukm',$data);
		$query = $this->get_daftar_anggota_nim($data['nim']);
		$id_daftar_anggota1 = $query->id_daftar_anggota;
		$this->proseshapus($id_daftar_anggota1);
	}
	public function proses_verif_gagal(){
		$data =$_POST;
		$query = $this->get_daftar_anggota_nim($data['nim']);
		$id_daftar_anggota1 = $query->id_daftar_anggota;
		$this->proseshapus($id_daftar_anggota1);
	}
	public function proseshapus($id_daftar_anggota){
		$this->db->where('id_daftar_anggota',$id_daftar_anggota);
		$this->db->delete('tb_daftar_anggota');
		redirect(base_url('cbem/verifmhs'),'_self');
	}
	public function daftar_fungsionaris() {
        $data=$_POST;
            $this->db->insert('tb_daftar_fungsionaris',$data);
            $this->session->set_flashdata('pesan','Data Sudah Disimpan...');
			redirect('cmahasiswa/dashboard','refresh');
	}
	public function daftar_anggota() {
        $data=$_POST;
            $this->db->insert('tb_daftar_anggota',$data);
            $this->session->set_flashdata('pesan','Data Sudah Disimpan...');
			redirect('cmahasiswa/dashboard','refresh');
	}
}