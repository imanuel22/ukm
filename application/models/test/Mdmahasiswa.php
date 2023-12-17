<?php
class Mdmahasiswa extends CI_Model{
    public function get_daftafmhs(){
		return $this->db->get('daftar_mahasiswa')->result();
	}
	public function get_daftarmhs_id($id_daftar_mahasiswa){
		return $this->db->get_where('daftar_mahasiswa',['id_daftar_mahasiswa'=>$id_daftar_mahasiswa])->row();
	}
    public function get_daftarmhs_nim($nim) {
		return $this->db->get_where('daftar_mahasiswa',['nim_mahasiswa',$nim])->row();
	}

	public function proses_verif_berhasil(){
		$data = $_POST;
		$data['status']='aktif';
		$data['level']='user';
		$this->db->insert('tb_mahasiswa',$data);
		$query = $this->get_daftarmhs_nim($data['nim']);
		$id_daftar_mahasiswa1 = $query->id_daftar_mahasiswa;
		$this->proseshapus($id_daftar_mahasiswa1);
	}
	public function proses_verif_gagal(){
		$data =$_POST;
		$query = $this->get_daftarmhs_nim($data['nim']);
		$id_daftar_mahasiswa1 = $query->id_daftar_mahasiswa;
		$this->proseshapus($id_daftar_mahasiswa1);
	}
	public function proseshapus($id_daftar_mahasiswa){
		$this->db->where('id_daftar_mahasiswa',$id_daftar_mahasiswa);
		$this->db->delete('tb_daftar_mahasiswa');
		redirect(base_url('cbem/verifmhs'),'_self');
	}

}
